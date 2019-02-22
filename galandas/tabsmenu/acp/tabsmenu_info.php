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
 * Tabs Menu in index ACP module info.
 */
class tabsmenu_info
{
	public function module()
	{
		return array(
			'filename'	=> '\galandas\tabsmenu\acp\tabsmenu_module',
			'title'		=> 'ACP_TABS_MENU_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_TABS_MENU',
					'auth'	=> 'ext_galandas/tabsmenu && acl_a_board',
					'cat'	=> array('ACP_TABS_MENU_TITLE')
				),
			),
		);
	}
}
