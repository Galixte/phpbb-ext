<?php

/**
 * This file is part of the NV Newspage Extension package.
 *
 * @copyright (c) nickvergessen <https://github.com/nickvergessen>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the license.txt file.
 */

namespace nickvergessen\newspage\migrations\v11x;

use phpbb\db\migration\migration;

/**
 * @package nickvergessen\newspage\migrations\v11x
 */
class release_1_1_1 extends migration
{
	/**
	 * {@inheritdoc}
	 */
	public function effectively_installed()
	{
		return version_compare($this->config['newspage_mod_version'], '1.1.1', '>=');
	}

	/**
	 * {@inheritdoc}
	 */
	static public function depends_on()
	{
		return array(
			'\nickvergessen\newspage\migrations\v11x\release_1_1_0',
			'\nickvergessen\newspage\migrations\v11x\better_archive_config_option',
			'\nickvergessen\newspage\migrations\v11x\replace_acp_module_with_controller',
		);
	}

	/**
	 * {@inheritdoc}
	 */
	public function update_data()
	{
		return array(
			array('config.update', array('newspage_mod_version', '1.1.1')),
		);
	}
}
