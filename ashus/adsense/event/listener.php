<?php
/**
*
* Google AdSense extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Ashus <https://ashus.ashus.net>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace ashus\adsense\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;
	
	/** @var \phpbb\config\db_text */
	protected $config_text;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\config\config_text       $config_text        Config_text object
	* @param \phpbb\template\template    $template           Template object
	* @param \phpbb\user                 $user               User object
	* @return \phpbb\adsense\event\listener
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\config\db_text $config_text, \phpbb\request\request $request, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->config = $config;
		$this->config_text = $config_text;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.acp_board_config_edit_add'	=> 'add_adsense_configs',
			'core.validate_config_variable'		=> 'validate_google_adsense',
			'core.page_header'					=> 'load_google_adsense',
		);
	}

	/**
	* Load Google AdSense HTML code
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function load_google_adsense($event)
	{
		$data = $this->config_text->get_array(array(
			'google_adsense_html',
			));
			
		if (!empty($data['google_adsense_html'])) {
			$this->template->assign_vars(array(
				'GOOGLE_ADSENSE_HTML' 	=> htmlspecialchars_decode($data['google_adsense_html']),
				'GOOGLE_ADSENSE_DISPLAY'	=> true
				));
		}
	}

	/**
	* Add config vars to ACP Board Settings
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function add_adsense_configs($event)
	{
		// Load language file
		$this->user->add_lang_ext('ashus/adsense', 'adsense_acp');

		// Add a config to the settings mode, after board_timezone
		if ($event['mode'] == 'settings' && isset($event['display_vars']['vars']['board_timezone']))
		{
			$data = $this->config_text->get_array(array(
				'google_adsense_html',
				));
			
			// If form is submitted or previewed
			if ($this->request->is_set_post('submit')) {
				$in_config = $this->request->variable('config', array(''=>''), true);
				$data['google_adsense_html'] = $in_config['google_adsense_html'];

				// Store the announcement settings to the config_table in the database
				$this->config_text->set_array(array(
					'google_adsense_html'		=> $data['google_adsense_html'],
				));
			}
			
			// Store display_vars event in a local variable
			$display_vars = $event['display_vars'];

			// Define the new config vars
			$ga_config_vars = array(
				'google_adsense_html' => array(
					'lang' => 'ACP_GOOGLE_ADSENSE_HTML',
					'validate' => 'text',
					'type' => 'textarea:11:80',
					'explain' => true,
				),
			);

			// Add the new config vars after board_timezone in the display_vars config array
			$insert_after = array('after' => 'board_timezone');
			$display_vars['vars'] = phpbb_insert_config_array($display_vars['vars'], $ga_config_vars, $insert_after);

			// Update the display_vars event with the new array
			$event['display_vars'] = $display_vars;

			// Return the data to edit form
			$this->config['google_adsense_html'] = $data['google_adsense_html'];
		}
	}


	/**
	* Validate the Google Adsense ID and slot ID
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function validate_google_adsense($event)
	{
		$input = $event['cfg_array']['google_adsense_html'];

		// Check if the validate test is for google_analytics
		if (($event['config_definition']['validate'] == 'google_adsense_html') && ($input !== ''))
		{
			// Store the error and input event data
			$error = $event['error'];

			if (!preg_match('/^ca\-pub-\d{9,20}$/', $input))
			{
				$error[] = $this->user->lang('ACP_GOOGLE_ADSENSE_HTML_INVALID', $input);
			}

			// Update error event data
			$event['error'] = $error;
		}
	}
}
