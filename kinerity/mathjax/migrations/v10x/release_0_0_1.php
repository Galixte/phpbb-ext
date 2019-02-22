<?php
/**
 *
 * MathJax extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, kinerity, https://www.layer-3.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace kinerity\mathjax\migrations\v10x;

use kinerity\mathjax\core\bbcodes_installer;
use phpbb\db\migration\container_aware_migration;

class release_0_0_1 extends \phpbb\db\migration\container_aware_migration
{
	/**
	 * Assign migration file dependencies for this migration
	 *
	 * @return array
	 * @access public
	 */
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v320\v320');
	}

	/**
	 * Add or update data in the database
	 *
	 * @return array
	 * @access public
	 */
	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'install_bbcodes'))),
		);
	}

	/**
	 * Add the LaTeX BBCode to the database
	 *
	 * @return void
	 * @access public
	 */
	public function install_bbcodes()
	{
		$install = new bbcodes_installer($this->db, $this->container->get('request'), $this->container->get('user'), $this->phpbb_root_path, $this->php_ext);
		$install->install_bbcodes([
			'latex' => [
				//display_on_posting is automatically set to true, so don't modify it
				'bbcode_match'			=> '[latex]{TEXT}[/latex]',
				'bbcode_tpl'			=> '<span>\({TEXT}\)</span>',
			],
		]);
	}
}
