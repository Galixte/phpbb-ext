<?php
/**
*
* @package phpBB Extension - Header Banner
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_HEADERBANNER_CONFIG_EXPLAIN'		=> 'This is the Configuration page for the Header Banner Extension',
	'ACP_HEADERBANNER_CONFIG_SET'			=> 'Configuration',

	'HEADERBANNER_CONFIG'					=> 'Header Banner Settings',
	'HEADERBANNER_SAVED'					=> 'Header Banner settings saved',

	'HEADERBANNER'							=> 'Header Banner URL',
	'HEADERBANNER_EXPLAIN'					=> 'Enter the full URL of your Banner here.',
	'HEADERBANNER_PLACEHOLDER'				=> 'http://mysite.com/images/banner.jpg',
	'HEADERBANNER_SELECT'					=> 'Do you wish to activate the Header Banner Extension?',

	'HEADERBANNER_CORNER'					=> 'Corner Radius',
	'HEADERBANNER_CORNER_EXPLAIN'			=> 'Do you want to radius the corner?',
	'HEADERBANNER_PX'						=> 'px',

	'HEADERBANNER_BACKGROUND'				=> 'Do you wish to hide the Header Background colour?',

	'HEADERBANNER_SIZE'						=> 'Banner width',
	'HEADERBANNER_SIZE_EXPLAIN'				=> 'Your banner will be displayed at the width of the forum header or the width of the banner (whichever is smaller) Should you wish to set a maximum width, you can do so here.',
	'HEADERBANNER_REQUIRED'					=> 'Required',

	'HEADERBANNER_SEARCH'							=> 'Where would you like the search to be shown?',
	'HEADERBANNER_SEARCH_HEADER_TOP_LEFT'			=> 'Header top left',
	'HEADERBANNER_SEARCH_HEADER_TOP_RIGHT'			=> 'Header top right',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_LEFT'		=> 'Header bottom left',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_RIGHT'		=> 'Header bottom right',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_MIDDLE'		=> 'Header bottom centre',
	'HEADERBANNER_SEARCH_NAVBAR'					=> 'NavBar',
	'HEADERBANNER_SEARCH_REMOVE'					=> 'Nowhere',

	'HEADERBANNER_REQUIRE_3.1.0'			=> 'This Extension is for phpBB 3.1.x only. It will not work with phpBB 3.2.x',
	'HEADERBANNER_REQUIRE_3.2.0'			=> 'This Extension is for phpBB 3.2.x only. It will not work with phpBB 3.1.x',
));
