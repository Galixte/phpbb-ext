<?php
/**
 *
 * Countdown Disable Board. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, Galandas, http://phpbb3world.altervista.org
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
	'CNT_ROV_TEXT'                     => 'Conf Text image color',
    'CNT_ROV_HOURS'                    => 'Hours',
    'CNT_ROV_ALLOW'                    => 'Enable/Disable',
    'CNT_DAYS_ALLOW'                   => 'Enable Days',
    'CNT_HOURS_ALLOW'                  => 'Enable Hours',
    'CNT_MINS_ALLOW'                   => 'Enable Minutes',
    'CNT_SECS_ALLOW'                   => 'Enable Seconds',	
    'CNT_ROV_ALLOW_EXPLAIN'            => 'Here you can decide whether to enable or disable Countdown Disable Board. <strong> Warning: if (Disable the Board)</strong> is enabled then you will also see the <strong>(Countdown Disable Board)</strong> if this is enabled, if disabled, you will only see that default to phpBB.',
	'CNT_ROV_VERSION'		           => 'Version',	
    'ACP_ROV_SETTINGS'                 => 'Configuration',
    'ACP_ROV_TITLE'                    => 'Countdown Disable Board',
    'CTN_ROV_CREDITS'                  => 'Extension Countdown Disable Board by <a href="http://phpbb3world.altervista.org"><strong>Galandas</strong></a>',
	'CNT_ROV_SETTING_SAVED'            => 'Settings updated successfully!',
	'CTN_ROV_DONATE'			       => '<a href="https://www.paypal.me/Galandas"><strong>Donate</strong></a>',
	'CTN_ROV_DONATE_EXPLAIN'	       => 'If you like this extension considers a donation offer a pizza',	
    'CNT_ROV_DAY'                      => 'Enter the number of days',
    'CNT_ROV_DAY_EXPLAIN'              => 'Here you must enter the number of days, example 06.',	
    'CNT_ROV_MONTH'                    => 'Enter the month',
    'CNT_ROV_MONTH_EXPLAIN'            => 'Here you have to input the month, example 06.',	
    'CNT_ROV_YEAR'                     => 'Enter the year',
    'CNT_ROV_YEAR_EXPLAIN'             => 'Here you have to enter the year, example 2020.',	
    'CNT_ROV_HOUR'                     => 'Enter the number of hours',
    'CNT_ROV_HOUR_EXPLAIN'             => 'Here you must enter the hours, example 06 you can also put 00.',	
    'CNT_ROV_MIN'                      => 'Enter the number of minutes',
    'CNT_ROV_MIN_EXPLAIN'              => 'Here you have to enter the minutes, example 08 you can also put 00.',	
    'CNT_ROV_SEC'                      => 'Enter the number of seconds',
    'CNT_ROV_SEC_EXPLAIN'              => 'Here you must enter the seconds, example 03 you can also put 00.',
    'CNT_ANIMATION'                    => 'Animation',
    'CNT_ANIMATION_EXPLAIN'            => 'Choose the type of circle Animation',
    'CNT_SMOOTH'                       => 'Smooth',
    'CTN_TICKS'                        => 'Ticks',
    'CTN_ROV_DATES'                    => 'Settings',	
	'CNT_ROV_START'                    => 'Text Displayed',
	'CNT_ROV_START_EXPLAIN'            => 'Enter the text you want to show to users when disabled the board. HTML is allowed a maximum of (255 characters allowed).',	
	'CNT_ROV_COLOR'                    => 'Background Color',
	'CNT_ROV_COLOR_EXPLAIN'            => 'Here you can enter a background color customized using Color Picker integrated.<br />Uses a color code hexadecimal example: <span style="color: #E58688"><strong>E58688</strong></span>',	
	'CNT_ROV_IMAGE'                    => 'Image Info',	
	'CNT_ROV_IMAGE_EXPLAIN'            => 'Here you can select a image from the 3 available, below the name.<br /><samp>info1.png</samp> - <samp>info2.png</samp> - <samp>info3.png</samp>',
	// Text index	
	'CONTO_GIO'		    => 'Days',
	'CONTO_ORE'	        => 'Hours',
	'CONTO_MIN'	        => 'Minutes',
	'CONTO_SEC'	        => 'Seconds',
));
