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
 * Countdown Disable Board ACP module info.
 */
class conto_info
{
	public function module()
	{
		return array(
			'filename'	=> '\galandas\contodb\acp\conto_module',
			'title'		=> 'ACP_ROV_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_ROV_SETTINGS',
					'auth'	=> 'ext_galandas/contodb && acl_a_board',
					'cat'	=> array('ACP_ROV_TITLE')
				),
			),
		);
	}
}
