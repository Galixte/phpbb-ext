<?php
/**
*
* @package phpBB Extension - News Scroll
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\newsscroll\acp;

class newsscroll_info
{
    public function module()
    {
        return array(
        'filename'  => '\hifikabin\newsscroll\acp\newsscroll_module',
        'title'     => 'ACP_NEWSSCROLL',
            'modes'     => array(
            'settings'  => array(
            'title'     => 'ACP_NEWSSCROLL_CONFIG',
            'auth'      => 'ext_hifikabin/newsscroll && acl_a_board',
            'cat'       => array('ACP_NEWSSCROLL')
                ),
            ),
        );
    }
}
