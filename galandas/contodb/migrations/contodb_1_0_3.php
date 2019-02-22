<?php
/**
 *
 * Countdown Disable Board. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace galandas\contodb\migrations;

class contodb_1_0_3 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		return array(
		// Add configs
			array('config.add', array('conto_enable', 0)),
			array('config.add', array('conto_sec_enable', 1)),
			array('config.add', array('conto_min_enable', 1)),
			array('config.add', array('conto_hour_enable', 1)),
			array('config.add', array('conto_day_enable', 1)),
			array('config.add', array('conto_animation', 0)),			
			array('config.add', array('conto_version', '1.0.3')),		
            array('config.add', array('conto_sec', '00')),
            array('config.add', array('conto_min', '00')),
            array('config.add', array('conto_hour', '00')),
            array('config.add', array('conto_year', '2020')),
            array('config.add', array('conto_month', '06')),
            array('config.add', array('conto_day', '06')),
            array('config.add', array('conto_color', 'D9EAD2')),
            array('config.add', array('conto_image', 'info2.png')),
            array('config.add', array('conto_start', '<span style="font-weight: bold; font-style: italic; font-size: 180%; color: #BF0000">The board is in maintenance, time to resume is given below.</span>')),			
			
        // Add ACP module
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_ROV_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_ROV_TITLE',
				array(
					'module_basename'	=> '\galandas\contodb\acp\conto_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
	
	public function revert_data()
	{
		return array(
			// Remove config
			array('config.remove', array('conto_enable', '')),
			array('config.remove', array('conto_sec_enable', '')),
			array('config.remove', array('conto_min_enable', '')),
			array('config.remove', array('conto_hour_enable', '')),
			array('config.remove', array('conto_day_enable', '')),
			array('config.remove', array('conto_animation', '')),			
			array('config.remove', array('conto_version', '')),
			array('config.remove', array('conto_sec', '')),
			array('config.remove', array('conto_min', '')),
			array('config.remove', array('conto_hour', '')),			
			array('config.remove', array('conto_year', '')),
			array('config.remove', array('conto_month', '')),
			array('config.remove', array('conto_day', '')),
			array('config.remove', array('conto_color', '')),
			array('config.remove', array('conto_image', '')),			
			array('config.remove', array('conto_start', '')),
            // Remove ACP module		
			array('module.remove', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_ROV_TITLE'
			)),
			array('module.remove', array(
				'acp',
				'ACP_ROV_TITLE',
				array(
					'module_basename'	=> '\galandas\contodb\acp\conto_module',
					'modes'				=> array('settings'),
				),
			)),
		);				
	}	
}
