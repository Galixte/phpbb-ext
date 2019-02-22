<?php
/**
 *
 * Countdown Disable Board. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace galandas\contodb\acp;

/**
 * Countdown Disable Board ACP module.
 */
class conto_module
{
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang_ext('galandas/contodb', 'acp_conto');
		$this->tpl_name = 'acp_conto_body';
		$this->page_title = $user->lang('ACP_ROV_TITLE');
		add_form_key('acp_conto_body');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_conto_body'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('conto_enable', $request->variable('conto_enable', 0));
			$config->set('conto_sec_enable', $request->variable('conto_sec_enable', 1));			
			$config->set('conto_min_enable', $request->variable('conto_min_enable', 1));			
			$config->set('conto_hour_enable', $request->variable('conto_hour_enable', 1));			
			$config->set('conto_day_enable', $request->variable('conto_day_enable', 1));
			$config->set('conto_animation', $request->variable('conto_animation', 0));			
			$config->set('conto_sec', $request->variable('conto_sec', ''));
			$config->set('conto_min', $request->variable('conto_min', ''));
			$config->set('conto_hour', $request->variable('conto_hour', ''));
			$config->set('conto_year', $request->variable('conto_year', ''));
			$config->set('conto_month', $request->variable('conto_month', ''));
			$config->set('conto_day', $request->variable('conto_day', ''));
			$config->set('conto_color', $request->variable('conto_color', ''));
			$config->set('conto_image', $request->variable('conto_image', ''));
			$config->set('conto_start', $request->variable('conto_start', '', true));			

			trigger_error($user->lang('CNT_ROV_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action,
			'CNT_VERSION'	=> (isset($config['conto_version'])) ? $config['conto_version'] : '',			
			'CTN_SEC'		=> (isset($config['conto_sec'])) ? $config['conto_sec'] : '',
		    'CTN_MIN'		=> (isset($config['conto_min'])) ? $config['conto_min'] : '',
		    'CTN_HOUR'		=> (isset($config['conto_hour'])) ? $config['conto_hour'] : '',
		    'CTN_YEAR'	    => (isset($config['conto_year'])) ? $config['conto_year'] : '',
		    'CTN_MONTH'		=> (isset($config['conto_month'])) ? $config['conto_month'] : '',
		    'CTN_DAY'		=> (isset($config['conto_day'])) ? $config['conto_day'] : '',
		    'CTN_COLOR'		=> (isset($config['conto_color'])) ? addslashes($config['conto_color']) : '',
		    'CTN_IMAGE'		=> (isset($config['conto_image'])) ? $config['conto_image'] : '',		
		    'CTN_START'		=> (isset($config['conto_start'])) ? $config['conto_start'] : '',
		    'CTN_ENABLE'	=> (!empty($config['conto_enable'])) ? true : false,
            // New entries			
		    'CTN_SEC_ENABLE'	=> (!empty($config['conto_sec_enable'])) ? true : false,			
		    'CTN_MIN_ENABLE'	=> (!empty($config['conto_min_enable'])) ? true : false,			
		    'CTN_HOUR_ENABLE'	=> (!empty($config['conto_hour_enable'])) ? true : false,
		    'CTN_DAY_ENABLE'	=> (!empty($config['conto_day_enable'])) ? true : false,
			'CTN_ANIMATION'		=> (!empty($config['conto_animation'])) ? true : false,			
		));
	}
}
