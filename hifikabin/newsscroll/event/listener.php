<?php
/**
*
* @package phpBB Extension - News Scroll
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\newsscroll\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/

class listener implements EventSubscriberInterface
{

    /** @var \phpbb\template\template */
    protected $template;

    /** @var \phpbb\config\config */
    protected $config;

    /** @var \phpbb\config\db_text */
    protected $config_text;

    static public function getSubscribedEvents()
    {
        return array(
            'core.page_header_after'    => 'add_page_header_link',
        );
    }

    public function __construct(\phpbb\template\template $template, \phpbb\config\config $config, \phpbb\config\db_text $config_text)
    {
        $this->template = $template;
        $this->config = $config;
        $this->config_text = $config_text;
    }

    public function add_page_header_link($event)
    {
        // Get Newsscroll data from the config_text object
        $newsscroll_text_data = $this->config_text->get_array(array(
            'news_scroll_text',
            'news_scroll_uid',
            'news_scroll_bitfield',
            'news_scroll_options',
            'news_scroll_speed',
        ));

        // Prepare Newsscroll for display
        $newsscroll_message = generate_text_for_display(
            $newsscroll_text_data['news_scroll_text'],
            $newsscroll_text_data['news_scroll_uid'],
            $newsscroll_text_data['news_scroll_bitfield'],
            $newsscroll_text_data['news_scroll_options']
        );

        $this->template->assign_vars(array(
        'S_NEWSSCROLL_ACTIVATED'        => $this->config['newsscroll_activated'] ? true : false,
        'S_NEWSSCROLL_INDEX'            => $this->config['newsscroll_index'] ? true : false,
        'S_NEWSSCROLL_MEMBER'           => $this->config['newsscroll_member'] ? true : false,
        'S_NEWSSCROLL_TEXT'             => $newsscroll_message,
        'S_NEWSSCROLL_SPEED'            => $newsscroll_text_data['news_scroll_speed'],
        ));
    }
}
