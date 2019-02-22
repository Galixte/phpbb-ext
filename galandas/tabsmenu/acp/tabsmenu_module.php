<?php
/**
 *
 * Tabs Menu in index. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace galandas\tabsmenu\acp;

/**
 * Tabs Menu in index ACP module.
 */
class tabsmenu_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang_ext('galandas/tabsmenu', 'common');
		$this->tpl_name = 'acp_tabsmenu_body';
		$this->page_title = $user->lang('ACP_TABS_MENU_TITLE');
		add_form_key('acp_tabsmenu_body');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_tabsmenu_body'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('tabsmenu_enable', $request->variable('tabsmenu_enable', 0));
			$config->set('tabsmenu_text_steady', $request->variable('tabsmenu_text_steady', '', true));
			$config->set('tabsmenu_enable_1', $request->variable('tabsmenu_enable_1', 0));			
			$config->set('tabsmenu_text_1', $request->variable('tabsmenu_text_1', '', true));
			$config->set('tabsmenu_enable_2', $request->variable('tabsmenu_enable_2', 0));			
			$config->set('tabsmenu_text_2', $request->variable('tabsmenu_text_2', '', true));
			$config->set('tabsmenu_enable_3', $request->variable('tabsmenu_enable_3', 0));			
			$config->set('tabsmenu_text_3', $request->variable('tabsmenu_text_3', '', true));
			$config->set('tabsmenu_enable_4', $request->variable('tabsmenu_enable_4', 0));			
			$config->set('tabsmenu_text_4', $request->variable('tabsmenu_text_4', '', true));
			$config->set('tabsmenu_enable_5', $request->variable('tabsmenu_enable_5', 0));			
			$config->set('tabsmenu_text_5', $request->variable('tabsmenu_text_5', '', true));
			$config->set('tabsmenu_enable_6', $request->variable('tabsmenu_enable_6', 0));			
			$config->set('tabsmenu_text_6', $request->variable('tabsmenu_text_6', '', true));
			$config->set('tabsmenu_enable_7', $request->variable('tabsmenu_enable_7', 0));			
			$config->set('tabsmenu_text_7', $request->variable('tabsmenu_text_7', '', true));
			$config->set('tabsmenu_enable_8', $request->variable('tabsmenu_enable_8', 0));			
			$config->set('tabsmenu_text_8', $request->variable('tabsmenu_text_8', '', true));
			$config->set('tabsmenu_pos', ($request->variable('tabsmenu_pos', 1)));
			$config->set('tabsmenu_pos', ($request->variable('tabsmenu_pos', 0)));
			$config->set('tabsmenu_groups', ($request->variable('tabsmenu_groups', '')));			
			
			trigger_error($user->lang('ACP_TABS_MENU_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'TABS_MENU_VERSION'		=> (isset($config['tabsmenu_version'])) ? $config['tabsmenu_version'] : '',
			'TABS_MENU_ENABLE'		=> (!empty($config['tabsmenu_enable'])) ? true : false,			
			'TABS_MENU_STEADY'		=> (isset($config['tabsmenu_text_steady'])) ? $config['tabsmenu_text_steady'] : '',
			'TABS_MENU_ENABLE_1'	=> (!empty($config['tabsmenu_enable_1'])) ? true : false,		
			'TABS_MENU_TEXT_1'		=> (isset($config['tabsmenu_text_1'])) ? $config['tabsmenu_text_1'] : '',		
			'TABS_MENU_ENABLE_2'	=> (!empty($config['tabsmenu_enable_2'])) ? true : false,
			'TABS_MENU_TEXT_2'		=> (isset($config['tabsmenu_text_2'])) ? $config['tabsmenu_text_2'] : '',
			'TABS_MENU_ENABLE_3'	=> (!empty($config['tabsmenu_enable_3'])) ? true : false,
			'TABS_MENU_TEXT_3'		=> (isset($config['tabsmenu_text_3'])) ? $config['tabsmenu_text_3'] : '',
			'TABS_MENU_ENABLE_4'	=> (!empty($config['tabsmenu_enable_4'])) ? true : false,
			'TABS_MENU_TEXT_4'		=> (isset($config['tabsmenu_text_4'])) ? $config['tabsmenu_text_4'] : '',
			'TABS_MENU_ENABLE_5'	=> (!empty($config['tabsmenu_enable_5'])) ? true : false,
			'TABS_MENU_TEXT_5'		=> (isset($config['tabsmenu_text_5'])) ? $config['tabsmenu_text_5'] : '',
			'TABS_MENU_ENABLE_6'	=> (!empty($config['tabsmenu_enable_6'])) ? true : false,
			'TABS_MENU_TEXT_6'		=> (isset($config['tabsmenu_text_6'])) ? $config['tabsmenu_text_6'] : '',
			'TABS_MENU_ENABLE_7'	=> (!empty($config['tabsmenu_enable_7'])) ? true : false,
			'TABS_MENU_TEXT_7'		=> (isset($config['tabsmenu_text_7'])) ? $config['tabsmenu_text_7'] : '',
			'TABS_MENU_ENABLE_8'	=> (!empty($config['tabsmenu_enable_8'])) ? true : false,
			'TABS_MENU_TEXT_8'		=> (isset($config['tabsmenu_text_8'])) ? $config['tabsmenu_text_8'] : '',
			'TABS_MENU_TOP'			=> (!empty($config['tabsmenu_pos'])) ? true : false,
			'TABS_MENU_FUT'			=> (!empty($config['tabsmenu_pos'])) ? true : false,			
		));
	}
}
