<?php
/**
*
* @package Header Banner
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\headerbanner\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template)
	{
		$this->config = $config;
		$this->template = $template;
	}

	static public function getSubscribedEvents()
	{
		return array(
		'core.user_setup'			=> 'load_language_on_setup',
		'core.page_header'			=> 'add_page_header_link',
		'core.page_header_after'	=> 'header_banner',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'hifikabin/headerbanner',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function add_page_header_link($event)
	{
		$this->template->assign_vars(array(
			'HEADERBANNER'				=> $this->config['headerbanner'],
			'HEADERBANNER_SELECT'		=> $this->config['headerbanner_select'],
			'HEADERBANNER_BACKGROUND'	=> $this->config['headerbanner_background'],
			'HEADERBANNER_CORNER'		=> $this->config['headerbanner_corner'],
			'HEADERBANNER_SIZE'			=> $this->config['headerbanner_size'],
			'HEADERBANNER_SEARCH'		=> $this->config['headerbanner_search'],
		));
	}

	public function header_banner($event)
	{
		$this->template->assign_vars(array(
			'S_IN_SEARCH' => ($this->config['headerbanner_select']) ? true : false,	
		));
	}
}
