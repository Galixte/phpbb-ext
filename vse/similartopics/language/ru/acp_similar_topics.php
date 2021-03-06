<?php
/**
*
* Precise Similar Topics [English]
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'PST_TITLE_ACP'		=> 'Определённо Похожие Темы',
	'PST_EXPLAIN'		=> 'Определённо Похожие Темы отображаются списком похожих (связанных) тем, в нижней части страницы выбранной темы.',
	'PST_LEGEND1'		=> 'Общие настройки',
	'PST_ENABLE'		=> 'Показывать Похожие Темы',
	'PST_LEGEND2'		=> 'Загрузить настройки',
	'PST_LIMIT'			=> 'Количество Похожих Тем для показа',
	'PST_LIMIT_EXPLAIN'	=> 'Здесь вы можете определить, сколько отображать Похожих Тем. Значение по умолчанию 5 тем.',
	'PST_TIME'			=> 'Период поиска',
	'PST_TIME_EXPLAIN'	=> 'Эта опция позволяет настроить период поиска похожих тем. Например, если установлено значение "5 дней" система будет показывать Похожие Темы за последние 5 дней. Значение по умолчанию: 1 год.',
	'PST_YEARS'			=> 'Год',
	'PST_MONTHS'		=> 'Месяц',
	'PST_WEEKS'			=> 'Неделя',
	'PST_DAYS'			=> 'День',
	'PST_CACHE'			=> 'Время хранения кэша для Похожие Темы',
	'PST_CACHE_EXPLAIN'	=> 'Хранение в кэше Похожих Тем истекает по истечении этого времени, в секундах. Установите 0, если вы хотите отключить кэш для Похожие Темы.',
	'PST_SENSE'			=> 'Search sensitivity',
	'PST_SENSE_EXPLAIN'	=> 'Set the search sensitivity to a value between 1 and 10. Use a lower number if you are not seeing any similar topics. Recommended settings: For “phpbb_topics” database tables using InnoDB use 1; for MyISAM use 5.',
	'PST_LEGEND3'		=> 'Настройки форума',
	'PST_NOSHOW_LIST'	=> 'Не показывать в',
	'PST_NOSHOW_TITLE'	=> 'Не показывать Похожие Темы в',
	'PST_IGNORE_SEARCH'	=> 'Не искать в',
	'PST_IGNORE_TITLE'	=> 'Не искать Похожие Темы в',
	'PST_STANDARD'		=> 'Стандартные',
	'PST_ADVANCED'		=> 'Расширенные',
	'PST_ADVANCED_TITLE'=> 'Нажмите, чтобы настроить дополнительные параметры расширения Похожие Темы для',
	'PST_ADVANCED_EXP'	=> 'Здесь вы можете выбрать конкретные форумы откуда будут извлекаться Похожие Темы. Только из выбранных вами здесь форумах будут извлекаться Похожие Темы для <strong>%s</strong>.<br /><br />Не выбирайте ничего, если Вы хотите, чтобы Похожие Темы извлекались из всех форумов.<br /><br />Выбор нескольких форумов производится посредством удержания клавиши <samp>CTRL</samp> (или <samp>&#8984;CMD</samp> на Mac) и клика мыши.',
	'PST_ADVANCED_FORUM'=> 'Дополнительные настройки форума',
	'PST_DESELECT_ALL'	=> 'Снять выделение',
	'PST_LEGEND4'		=> 'Дополнительные настройки',
	'PST_WORDS'			=> 'Слова для игнорирования',
	'PST_WORDS_EXPLAIN'	=> 'Добавьте специальные слова, уникальные для вашего форума, которые следует игнорировать при обнаружении Похожих Тем. (Примечание: Слова, которые в настоящее время считаются общими на вашем языке уже игнорируются по умолчанию.) Отделите каждое слово с пробелом. Без учета регистра. Максимум 255 символов.',
	'PST_SAVED'			=> 'Настройки Похожие Темы обновлены',
	'PST_FORUM_INFO'	=> '“Не показывать в”: Не показывать Похожие Темы в выбранных форумах.<br />“Не искать в” : Не будет происходить поиск Похожие Темы в выбранных форумах.',
	'PST_NO_COMPAT'		=> 'Расширение Похожие Темы не совместимо с вашим форумом. Расширение Похожие Темы будет работать только в базе данных MySQL 4 или 5 MySQL или PostgreSQL.',
	'PST_ERR_CONFIG'	=> 'Слишком много групп были отмечены в списке форумов. Пожалуйста, попробуйте еще раз с небольшим выбором.',
));
