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
	'CNT_ROV_TEXT'                     => 'Conf Testo Immagine Colore',
    'CNT_ROV_HOURS'                    => 'Ore',
    'CNT_ROV_ALLOW'                    => 'Abilita/Disabilita',
    'CNT_DAYS_ALLOW'                   => 'Abilita Giorni',
    'CNT_HOURS_ALLOW'                  => 'Abilita Ore',
    'CNT_MINS_ALLOW'                   => 'Abilita Minuti',
    'CNT_SECS_ALLOW'                   => 'Abilita Secondi',	
    'CNT_ROV_ALLOW_EXPLAIN'            => 'Qui puoi decidere se abilitare o disabilitare Countdown Disabilita Board. <strong>Attenzione: se (Disabilita la Board)</strong> è abilitata allora vedrete anche <strong>(Countdown Disabilita Board)</strong> se anche questa è abilitata, se disabilitata vedrete solo quella di default di phpBB.',
	'CNT_ROV_VERSION'		           => 'Versione',	
    'ACP_ROV_SETTINGS'                 => 'Configurazione',
    'ACP_ROV_TITLE'                    => 'Countdown Disabilita Board',
    'CTN_ROV_CREDITS'                  => 'Estensione Countdown Disabilita Board by <a href="http://phpbb3world.altervista.org"><strong>Galandas</strong></a>',
	'CNT_ROV_SETTING_SAVED'            => 'Impostazioni aggiornate con successo!',
	'CTN_ROV_DONATE'			       => '<a href="https://www.paypal.me/Galandas"><strong>Donate</strong></a>',
	'CTN_ROV_DONATE_EXPLAIN'	       => 'Se ti piace questa estensione considera una donazione offrimi una pizza',
    'CNT_ROV_DAY'                      => 'Inserisci il numero di giorni',
    'CNT_ROV_DAY_EXPLAIN'              => 'Qui devi inserire il numero di giorni, esempio 06.',	
    'CNT_ROV_MONTH'                    => 'Inserisci il mese',
    'CNT_ROV_MONTH_EXPLAIN'            => 'Qui devi inserire il mese esempio 06.',	
    'CNT_ROV_YEAR'                     => 'Inserisci l’anno',
    'CNT_ROV_YEAR_EXPLAIN'             => 'Qui devi inserire l’anno esempio 2020.',	
    'CNT_ROV_HOUR'                     => 'Inserisci il numero di ore',
    'CNT_ROV_HOUR_EXPLAIN'             => 'Qui devi inserire le ore esempio 06, puoi anche mettere 00.',	
    'CNT_ROV_MIN'                      => 'Inserisci il numero di minuti',
    'CNT_ROV_MIN_EXPLAIN'              => 'Qui devi inserire i minuti esempio 08, puoi anche mettere 00.',	
    'CNT_ROV_SEC'                      => 'Inserisci il numero di secondi',
    'CNT_ROV_SEC_EXPLAIN'              => 'Qui devi inserire i secondi esempio 03, puoi anche mettere 00.',
    'CNT_ANIMATION'                    => 'Animazione',
    'CNT_ANIMATION_EXPLAIN'            => 'Scegli il tipo di Animazione del cerchio',
    'CNT_SMOOTH'                       => 'Smooth',
    'CTN_TICKS'                        => 'Ticks',
    'CTN_ROV_DATES'                    => 'Impostazioni',	
	'CNT_ROV_START'                    => 'Testo Visualizzato',
	'CNT_ROV_START_EXPLAIN'            => 'Inserisci il testo che desideri far vedere agli utenti quando disabiliti la board. HTML è permesso massimo (255 caratteri consentiti).',	
	'CNT_ROV_COLOR'                    => 'Colore di sfondo',
	'CNT_ROV_COLOR_EXPLAIN'            => 'Qui è possibile inserire un colore di sfondo personalizzato utilizzando Color Picker integrato.<br />Utilizza un codice colore esadecimale ad esempio: <span style="color: #E58688"><strong>E58688</strong></span>',	
	'CNT_ROV_IMAGE'                    => 'Immagine Info',	
	'CNT_ROV_IMAGE_EXPLAIN'            => 'Qui è possibile selezionare un immagine dalle 3 messe a disposizione, sotto il nome è l’anteprima.<br /><samp>info1.png</samp> - <samp>info2.png</samp> - <samp>info3.png</samp>',
    // Testo index	
	'CONTO_GIO'		    => 'Giorni',
	'CONTO_ORE'	        => 'Ore',
	'CONTO_MIN'	        => 'Minuti',
	'CONTO_SEC'	        => 'Secondi',	
));
