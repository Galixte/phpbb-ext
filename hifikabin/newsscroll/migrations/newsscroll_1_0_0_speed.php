<?php
/**
*
* @package phpBB Extension - News Scroll
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\newsscroll\migrations;

class newsscroll_1_0_0_speed extends \phpbb\db\migration\migration
{
    static public function depends_on()
    {
        return array('\hifikabin\newsscroll\migrations\newsscroll_1_0_0');
    }

    public function update_data()
    {
        return array(
        //Add Config
        array('config_text.add', array('news_scroll_speed', '10')),
        );
    }
}
