<?php
/**
*
* @package phpBB Extension - News Scroll
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\newsscroll\migrations;

class newsscroll_1_0_0 extends \phpbb\db\migration\migration
{
    public function update_data()
    {
        return array(
            // Add configs
            array('config.add', array('newsscroll_activated', '0')),
            array('config.add', array('newsscroll_index', '0')),
            array('config.add', array('newsscroll_member', '0')),
            array('config_text.add', array('news_scroll_text', 'Scrolling Text')),
            array('config_text.add', array('news_scroll_uid', '')),
            array('config_text.add', array('news_scroll_bitfield', '')),
            array('config_text.add', array('news_scroll_options', OPTION_FLAG_BBCODE + OPTION_FLAG_SMILIES + OPTION_FLAG_LINKS)),

             // Add the ACP module
            array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_NEWSSCROLL')),
            array('module.add', array(
                'acp', 'ACP_NEWSSCROLL', array(
                'module_basename' => '\hifikabin\newsscroll\acp\newsscroll_module',
                'modes' => array('settings'),
                ),
            )),
        );
    }
}
