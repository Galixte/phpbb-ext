<?php
/**
 *
 * Countdown Disable Board. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace galandas\contodb\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Countdown Disable Board Event listener.
 */
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	     => 'load_language',		
			'core.page_header_after' => 'page_header_after',
		);
	}

	/* @var \phpbb\template\template */
	protected $template;
	
	/* @var \phpbb\config\config */
	protected $config;	

	/**
	 * Constructor
	 *
	 * @param \phpbb\template\template	$template	Template object
	 * @param \phpbb\config\config		$config	 
	 */
	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config)
	{
		$this->template = $template;
        $this->config = $config;		
	}

	/**
	 * A sample PHP event
	 * Modifies the names of the forums on index
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function load_language($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'galandas/contodb',
			'lang_set' => 'acp_conto',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
	
	public function page_header_after($event)
	{
	$this->template->assign_vars(array(		
		'CTN_SEC'		=> $this->config['conto_sec'],
		'CTN_MIN'		=> $this->config['conto_min'],
		'CTN_HOUR'		=> $this->config['conto_hour'],
		'CTN_YEAR'	    => $this->config['conto_year'],
		'CTN_MONTH'		=> $this->config['conto_month'],
		'CTN_DAY'		=> $this->config['conto_day'],
		'CTN_COLOR'		=> $this->config['conto_color'],
		'CTN_IMAGE'		=> $this->config['conto_image'],		
		'CTN_START'		=> htmlspecialchars_decode ($this->config['conto_start']),
		'CTN_ENABLE'	=> $this->config['conto_enable'],
		'CTN_SEC_ENABLE'	=> $this->config['conto_sec_enable'],			
		'CTN_MIN_ENABLE'	=> $this->config['conto_min_enable'],			
		'CTN_HOUR_ENABLE'	=> $this->config['conto_hour_enable'],
		'CTN_DAY_ENABLE'	=> $this->config['conto_day_enable'],
		'CTN_ANIMATION'		=> $this->config['conto_animation'],		
		));		
	}
}
