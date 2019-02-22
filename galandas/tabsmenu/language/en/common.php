<?php
/**
 *
 * Tabs Menu in index. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_TABS_MENU_CREDITS'					=> 'Extension Tabs Menu by <a href="http://phpbb3world.altervista.org"><strong>Galandas</strong></a>',
	'ACP_TABS_MENU_DONATE'					=> '<a href="https://www.paypal.me/Galandas"><strong>Donate</strong></a>',
	'ACP_TABS_MENU_DONATE_EXPLAIN'			=> 'If you like this extension considers a donation offer a pizza',
	'ACP_TABS_MENU_SETTINGS'				=> 'Tabs Menu settings',
	'ACP_TABS_MENU_VERSION'					=> 'Version',	
	'ACP_TABS_MENU_ENABLE'					=> 'Enable Tabs Menu?',
	'ACP_TABS_MENU_ENABLE_EXPLAIN'			=> 'Enable Tabs Menu extension in index board.',
	'ACP_TABS_MENU_TEXT'					=> 'Text Displayed tab 1',
	'ACP_TABS_MENU_TEXT_EXPLAIN'			=> 'Enter the text you want to show in tab fixed 1. HTML is allowed, a maximum of (255 characters allowed).',
	'ACP_TABS_MENU_PLACEHOLDER'				=> 'Text Displayed tab 1',	
	'ACP_TABS_MENU_SETTING_SAVED'			=> 'Settings have been saved successfully!',
	'ACP_TABS_MENU_ENABLE_1'				=> 'Enable Tab 2',
	'ACP_TABS_MENU_ENABLE_1_EXPLAIN'		=> 'Switch on Tab 2',
	'ACP_TABS_MENU_TEXT_1'					=> 'Text Displayed 2',
	'ACP_TABS_MENU_TEXT_1_EXPLAIN'			=> 'Enter the text you want to show in tab 2. HTML is allowed, a maximum of (255 characters allowed).',
	'ACP_TABS_MENU_ENABLE_2'				=> 'Enable Tab 3',
	'ACP_TABS_MENU_ENABLE_2_EXPLAIN'		=> 'Switch on Tab 3',
	'ACP_TABS_MENU_TEXT_2'					=> 'Text Displayed 3',
	'ACP_TABS_MENU_TEXT_2_EXPLAIN'			=> 'Enter the text you want to show in tab 3. HTML is allowed, a maximum of (255 characters allowed).',
	'ACP_TABS_MENU_ENABLE_3'				=> 'Enable Tab 4',
	'ACP_TABS_MENU_ENABLE_3_EXPLAIN'		=> 'Switch on Tab 4',
	'ACP_TABS_MENU_TEXT_3'					=> 'Text Displayed 4',
	'ACP_TABS_MENU_TEXT_3_EXPLAIN'			=> 'Enter the text you want to show in tab 4. HTML is allowed, a maximum of (255 characters allowed).',
	'ACP_TABS_MENU_ENABLE_4'				=> 'Enable Tab 5',
	'ACP_TABS_MENU_ENABLE_4_EXPLAIN'		=> 'Switch on Tab 5',	
	'ACP_TABS_MENU_TEXT_4'					=> 'Text Displayed 5',
	'ACP_TABS_MENU_TEXT_4_EXPLAIN'			=> 'Enter the text you want to show in tab 5. HTML is allowed, a maximum of (255 characters allowed).',
	'ACP_TABS_MENU_ENABLE_5'				=> 'Enable Tab 6',
	'ACP_TABS_MENU_ENABLE_5_EXPLAIN'		=> 'Switch on Tab 6',	
	'ACP_TABS_MENU_TEXT_5'					=> 'Text Displayed 6',
	'ACP_TABS_MENU_TEXT_5_EXPLAIN'			=> 'Enter the text you want to show in tab 6. HTML is allowed, a maximum of (255 characters allowed).',
	'ACP_TABS_MENU_ENABLE_6'				=> 'Enable Tab 7',
	'ACP_TABS_MENU_ENABLE_6_EXPLAIN'		=> 'Switch on Tab 7',	
	'ACP_TABS_MENU_TEXT_6'					=> 'Text Displayed 7',
	'ACP_TABS_MENU_TEXT_6_EXPLAIN'			=> 'Enter the text you want to show in tab 7. HTML is allowed, a maximum of (255 characters allowed).',
	'ACP_TABS_MENU_ENABLE_7'				=> 'Enable Tab 8',
	'ACP_TABS_MENU_ENABLE_7_EXPLAIN'		=> 'Switch on Tab 8',	
	'ACP_TABS_MENU_TEXT_7'					=> 'Text Displayed 8',
	'ACP_TABS_MENU_TEXT_7_EXPLAIN'			=> 'Enter the text you want to show in tab 8. HTML is allowed, a maximum of (255 characters allowed).',
	'ACP_TABS_MENU_ENABLE_8'				=> 'Enable Tab 9',
	'ACP_TABS_MENU_ENABLE_8_EXPLAIN'		=> 'Switch on Tab 9',	
	'ACP_TABS_MENU_TEXT_8'					=> 'Text Displayed 9',
	'ACP_TABS_MENU_TEXT_8_EXPLAIN'			=> 'Enter the text you want to show in tab 9. HTML is allowed, a maximum of (255 characters allowed).',
	// Set Location
	'ACP_TABS_MENU_CONFS'					=> 'Set Location',
	'TABS_MENU_POS'							=> 'Position',
	'TABS_MENU_POS_EXPLAIN'					=> 'Choose the position. High after the navbar, appears before the forum list on top.<br />In low after Statistics, it appears after the forum Statistics.',
	'TABS_MENU_TOP'							=> 'High after the navbar',
	'TABS_MENU_FUT'							=> 'In low after Statistics',
	// Permission groups	
	'ACL_U_TM_TABS'							=> 'Can see Tabs Menu',	
	// Text index
	'TABS_MENU_TEXT_1'						=> 'Tab 1',
	'TABS_MENU_TEXT_2'						=> 'Tab 2',
	'TABS_MENU_TEXT_3'						=> 'Tab 3',
	'TABS_MENU_TEXT_4'						=> 'Tab 4',
	'TABS_MENU_TEXT_5'						=> 'Tab 5',
	'TABS_MENU_TEXT_6'						=> 'Tab 6',
	'TABS_MENU_TEXT_7'						=> 'Tab 7',
	'TABS_MENU_TEXT_8'						=> 'Tab 8',
	'TABS_MENU_TEXT_9'						=> 'Tab 9',	
));
