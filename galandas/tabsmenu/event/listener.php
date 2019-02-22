<?php
/**
 *
 * Tabs Menu in index. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace galandas\tabsmenu\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\template\template;
use phpbb\config\config;
use phpbb\auth\auth;
use phpbb\user;

/**
 * Tabs Menu in index Event listener.
 */
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\config\config */
	protected $config;
	
	/** @var \phpbb\auth\auth */
	protected $auth;	

	/** @var \phpbb\user */
	protected $user;
	
	/**
	 * Constructor
	 *
	 * @param \phpbb\template\template			$template
	 * @param \phpbb\config\config				$config
	 * @param \phpbb\auth\auth					$auth
	 * @param user								$user
	 */
	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config, \phpbb\auth\auth $auth, \phpbb\user $user)
	{
		$this->template = $template;
		$this->config = $config;
		$this->auth = $auth;
		$this->user = $user;
	}
	
	static public function getSubscribedEvents()
	{
		return array(
			'core.permissions'	=> 'add_permission',		
			'core.user_setup'	=> 'load_language',		
			'core.page_header'	=> 'display_page_header',
		);
	}

	/**
	 * A sample PHP event
	 * Modifies the names of the forums on index
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function add_permission($event)
	{
		$permissions = $event['permissions'];
		$permissions['u_tabs'] = array('lang' => 'ACL_U_TM_TABS', 'cat' => 'misc');
		$event['permissions'] = $permissions;
	}	 
	 
	public function load_language($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'galandas/tabsmenu',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
	
	public function display_page_header($event)
	{
		$this->template->assign_vars(array(
			'TABS_MENU_ENABLE'		=> $this->config['tabsmenu_enable'] ? true : false,
			'TABS_MENU_STEADY'		=> htmlspecialchars_decode ($this->config['tabsmenu_text_steady']),			
			'TABS_MENU_ENABLE_1'	=> $this->config['tabsmenu_enable_1'] ? true : false,
			'TABS_MENU_TEXT_1'		=> htmlspecialchars_decode ($this->config['tabsmenu_text_1']),
			'TABS_MENU_ENABLE_2'	=> $this->config['tabsmenu_enable_2'] ? true : false,
			'TABS_MENU_TEXT_2'		=> htmlspecialchars_decode ($this->config['tabsmenu_text_2']),
			'TABS_MENU_ENABLE_3'	=> $this->config['tabsmenu_enable_3'] ? true : false,			
			'TABS_MENU_TEXT_3'		=> htmlspecialchars_decode ($this->config['tabsmenu_text_3']),
			'TABS_MENU_ENABLE_4'	=> $this->config['tabsmenu_enable_4'] ? true : false,			
			'TABS_MENU_TEXT_4'		=> htmlspecialchars_decode ($this->config['tabsmenu_text_4']),
			'TABS_MENU_ENABLE_5'	=> $this->config['tabsmenu_enable_5'] ? true : false,			
			'TABS_MENU_TEXT_5'		=> htmlspecialchars_decode ($this->config['tabsmenu_text_5']),
			'TABS_MENU_ENABLE_6'	=> $this->config['tabsmenu_enable_6'] ? true : false,			
			'TABS_MENU_TEXT_6'		=> htmlspecialchars_decode ($this->config['tabsmenu_text_6']),
			'TABS_MENU_ENABLE_7'	=> $this->config['tabsmenu_enable_7'] ? true : false,			
			'TABS_MENU_TEXT_7'		=> htmlspecialchars_decode ($this->config['tabsmenu_text_7']),
			'TABS_MENU_ENABLE_8'	=> $this->config['tabsmenu_enable_8'] ? true : false,			
			'TABS_MENU_TEXT_8'		=> htmlspecialchars_decode ($this->config['tabsmenu_text_8']),
			'TABS_MENU_TOP'			=> (!empty($this->config['tabsmenu_pos']) == 1) ? true : false,
			'TABS_MENU_FUT'			=> (!empty($this->config['tabsmenu_pos']) == 0) ? true : false,
			'U_TM_TABS'				=> ($this->auth->acl_get('u_tabs')) ? true : false,			
		));			
	}
}
