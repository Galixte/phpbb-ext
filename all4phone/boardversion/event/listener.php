<?php
/**
*
* @package phpBB Extension - Board Version Extensions
* @copyright (c) 2016 all4phone - http://phpbbmods.cba.pl
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace all4phone\boardversion\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\auth\auth */
	protected $auth;
	
	/** @var \phpbb\config\config */
	protected $config;
	
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;
	/**
	* Constructor
	*
	* @param \phpbb\auth\auth				$auth			Auth object
	* @param \phpbb\config\config			$config			Config Object
	* @param \phpbb\template\template		$template		Template object
	* @param \phpbb\user					$user			User Object
	*
	*/
	public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->auth = $auth;
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.permissions'		=> 'add_permission',
			'core.page_header'		=> 'page_header',
		);
	}

    public function add_permission($event)
    {
        $permis = $event['permissions'];
        $permis['u_see_boardversion'] = array('lang' => 'ACL_U_SEE_BOARDVERSION', 'cat' => 'misc');
        $event['permissions'] = $permis;
    }

	public function page_header($event)
	{
		$this->user->add_lang_ext('all4phone/boardversion', 'common');
		
		$this->template->assign_vars(array(
			'S_BOARDVERSION'=> $this->config['version'],
			'U_SEE_BOARDVERSION'	=> $this->auth->acl_get('u_see_boardversion'),
		));
	}
}