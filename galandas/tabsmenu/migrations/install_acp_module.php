<?php
/**
 *
 * Tabs Menu in index. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace galandas\tabsmenu\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('tabsmenu_version', '1.0.0')),			
			array('config.add', array('tabsmenu_enable', 0)),
			array('config.add', array('tabsmenu_text_steady', '')),
			array('config.add', array('tabsmenu_enable_1', 0)),
			array('config.add', array('tabsmenu_text_1', '')),
			array('config.add', array('tabsmenu_enable_2', 0)),
			array('config.add', array('tabsmenu_text_2', '')),
			array('config.add', array('tabsmenu_enable_3', 0)),
			array('config.add', array('tabsmenu_text_3', '')),
			array('config.add', array('tabsmenu_enable_4', 0)),
			array('config.add', array('tabsmenu_text_4', '')),
			array('config.add', array('tabsmenu_enable_5', 0)),
			array('config.add', array('tabsmenu_text_5', '')),
			array('config.add', array('tabsmenu_enable_6', 0)),
			array('config.add', array('tabsmenu_text_6', '')),
			array('config.add', array('tabsmenu_enable_7', 0)),
			array('config.add', array('tabsmenu_text_7', '')),
			array('config.add', array('tabsmenu_enable_8', 0)),
			array('config.add', array('tabsmenu_text_8', '')),
			array('config.add', array('tabsmenu_pos', 1)),
			// Add permissions
			array('permission.add', array('u_tabs')),			
			// Set permissions
			array('permission.permission_set', array('GUESTS', 'u_tabs', 'group')),
			array('permission.permission_set', array('REGISTERED', 'u_tabs', 'group')),
			array('permission.permission_set', array('NEWLY_REGISTERED', 'u_tabs', 'group')),
			array('permission.permission_set', array('BOTS', 'u_tabs', 'group', false)),			
			// Add ACP module
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_TABS_MENU_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_TABS_MENU_TITLE',
				array(
					'module_basename'	=> '\galandas\tabsmenu\acp\tabsmenu_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
