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
	'ACP_TABS_MENU_CREDITS'					=> 'Estensione Tabs Menu by <a href="http://phpbb3world.altervista.org"><strong>Galandas</strong></a>',
	'ACP_TABS_MENU_DONATE'					=> '<a href="https://www.paypal.me/Galandas"><strong>Donate</strong></a>',
	'ACP_TABS_MENU_DONATE_EXPLAIN'			=> 'Se ti piace questa estensione considera una donazione offrimi una pizza',
	'ACP_TABS_MENU_SETTINGS'				=> 'Impostazioni Tabs Menu',
	'ACP_TABS_MENU_VERSION'					=> 'Versione',	
	'ACP_TABS_MENU_ENABLE'					=> 'Abilita Tabs Menu?',
	'ACP_TABS_MENU_ENABLE_EXPLAIN'			=> 'Abilita la visualizzazione di Tabs Menu sull’indice.',
	'ACP_TABS_MENU_TEXT'					=> 'Testo visualizzato Scheda 1',
	'ACP_TABS_MENU_TEXT_EXPLAIN'			=> 'Inserisci il testo che desideri mostrare nella scheda fissa 1. È permesso l’utilizzo di HTML, massimo (255 caratteri consentiti).',
	'ACP_TABS_MENU_PLACEHOLDER'				=> 'Testo visualizzato Scheda 1',	
	'ACP_TABS_MENU_SETTING_SAVED'			=> 'Le impostazioni sono state salvate correttamente!',
	'ACP_TABS_MENU_ENABLE_1'				=> 'Abilita Scheda 2',
	'ACP_TABS_MENU_ENABLE_1_EXPLAIN'		=> 'Accendi Scheda 2',
	'ACP_TABS_MENU_TEXT_1'					=> 'Testo visualizzato 2',
	'ACP_TABS_MENU_TEXT_1_EXPLAIN'			=> 'Inserisci il testo che desideri mostrare nella scheda 2. È permesso l’utilizzo di HTML, massimo (255 caratteri consentiti).',
	'ACP_TABS_MENU_ENABLE_2'				=> 'Abilita Scheda 3',
	'ACP_TABS_MENU_ENABLE_2_EXPLAIN'		=> 'Accendi Scheda 3',
	'ACP_TABS_MENU_TEXT_2'					=> 'Testo visualizzato 3',
	'ACP_TABS_MENU_TEXT_2_EXPLAIN'			=> 'Inserisci il testo che desideri mostrare nella scheda 3. È permesso l’utilizzo di HTML, massimo (255 caratteri consentiti).',
	'ACP_TABS_MENU_ENABLE_3'				=> 'Abilita Scheda 4',
	'ACP_TABS_MENU_ENABLE_3_EXPLAIN'		=> 'Accendi Scheda 4',
	'ACP_TABS_MENU_TEXT_3'					=> 'Testo visualizzato 4',
	'ACP_TABS_MENU_TEXT_3_EXPLAIN'			=> 'Inserisci il testo che desideri mostrare nella scheda 4. È permesso l’utilizzo di HTML, massimo (255 caratteri consentiti).',
	'ACP_TABS_MENU_ENABLE_4'				=> 'Abilita Scheda 5',
	'ACP_TABS_MENU_ENABLE_4_EXPLAIN'		=> 'Accendi Scheda 5',	
	'ACP_TABS_MENU_TEXT_4'					=> 'Testo visualizzato 5',
	'ACP_TABS_MENU_TEXT_4_EXPLAIN'			=> 'Inserisci il testo che desideri mostrare nella scheda 5. È permesso l’utilizzo di HTML, massimo (255 caratteri consentiti).',
	'ACP_TABS_MENU_ENABLE_5'				=> 'Abilita Scheda 6',
	'ACP_TABS_MENU_ENABLE_5_EXPLAIN'		=> 'Accendi Scheda 6',	
	'ACP_TABS_MENU_TEXT_5'					=> 'Testo visualizzato 6',
	'ACP_TABS_MENU_TEXT_5_EXPLAIN'			=> 'Inserisci il testo che desideri mostrare nella scheda 6. È permesso l’utilizzo di HTML, massimo (255 caratteri consentiti).',
	'ACP_TABS_MENU_ENABLE_6'				=> 'Abilita Scheda 7',
	'ACP_TABS_MENU_ENABLE_6_EXPLAIN'		=> 'Accendi Scheda 7',	
	'ACP_TABS_MENU_TEXT_6'					=> 'Testo visualizzato 7',
	'ACP_TABS_MENU_TEXT_6_EXPLAIN'			=> 'Inserisci il testo che desideri mostrare nella scheda 7. È permesso l’utilizzo di HTML, massimo (255 caratteri consentiti).',
	'ACP_TABS_MENU_ENABLE_7'				=> 'Abilita Scheda 8',
	'ACP_TABS_MENU_ENABLE_7_EXPLAIN'		=> 'Accendi Scheda 8',	
	'ACP_TABS_MENU_TEXT_7'					=> 'Testo visualizzato 8',
	'ACP_TABS_MENU_TEXT_7_EXPLAIN'			=> 'Inserisci il testo che desideri mostrare nella scheda 8. È permesso l’utilizzo di HTML, massimo (255 caratteri consentiti).',
	'ACP_TABS_MENU_ENABLE_8'				=> 'Abilita Scheda 9',
	'ACP_TABS_MENU_ENABLE_8_EXPLAIN'		=> 'Accendi Scheda 9',	
	'ACP_TABS_MENU_TEXT_8'					=> 'Testo visualizzato 9',
	'ACP_TABS_MENU_TEXT_8_EXPLAIN'			=> 'Inserisci il testo che desideri mostrare nella scheda 9. È permesso l’utilizzo di HTML, massimo (255 caratteri consentiti).',
	// Set Location
	'ACP_TABS_MENU_CONFS'					=> 'Posizione',
	'TABS_MENU_POS'							=> 'Imposta la posizione',
	'TABS_MENU_POS_EXPLAIN'					=> 'Scegli la posizione. In alto dopo la navbar, appare prima della lista forum in cima.<br />In basso dopo le Statistiche, appare dopo le Statistiche del forum.',
	'TABS_MENU_TOP'							=> 'In alto dopo la navbar',
	'TABS_MENU_FUT'							=> 'In basso dopo le Statistiche',
	// Permission groups	
	'ACL_U_TM_TABS'							=> 'Può vedere Tabs Menu',	
	// Text index
	'TABS_MENU_TEXT_1'						=> 'Scheda 1',
	'TABS_MENU_TEXT_2'						=> 'Scheda 2',
	'TABS_MENU_TEXT_3'						=> 'Scheda 3',
	'TABS_MENU_TEXT_4'						=> 'Scheda 4',
	'TABS_MENU_TEXT_5'						=> 'Scheda 5',
	'TABS_MENU_TEXT_6'						=> 'Scheda 6',
	'TABS_MENU_TEXT_7'						=> 'Scheda 7',
	'TABS_MENU_TEXT_8'						=> 'Scheda 8',
	'TABS_MENU_TEXT_9'						=> 'Scheda 9',	
));
