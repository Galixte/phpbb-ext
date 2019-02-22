<?php
/**
*
* @package phpBB Extension - Board Version
* @copyright (c) 2016 all4phone - http://phpbbmods.cba.pl
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace all4phone\boardversion\migrations;

class boardversion_schema extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			
			// Add permissions
			array('permission.add', array('u_see_boardversion')),
			// Set permissions
			array('permission.permission_set', array('ADMINISTRATORS', 'u_see_boardversion', 'group')),
		);
	}
	
	public function revert_data()
	{
		return array(
			
			// Remove permissions
			array('permission.remove', array('u_see_boardversion')),
			// Unet permissions
			array('permission.permission_unset', array('ADMINISTRATORS', 'u_see_boardversion', 'group')),
		);
	}
}