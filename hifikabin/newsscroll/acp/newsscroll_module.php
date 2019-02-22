<?php
/**
*
* @package phpBB Extension - News Scroll
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\newsscroll\acp;

class newsscroll_module
{
    /** @var \phpbb\config\config */
    protected $config;

    /** @var \phpbb\config\db_text */
    protected $config_text;

    /** @var \phpbb\db\driver\driver_interface */
    protected $db;

    /** @var \phpbb\log\log */
    protected $log;

    /** @var \phpbb\request\request */
    protected $request;

    /** @var \phpbb\template\template */
    protected $template;

    /** @var \phpbb\user */
    protected $user;

    /** @var string */
    protected $phpbb_root_path;

    /** @var string */
    protected $php_ext;

    /** @var string */
    public $u_action;

    public function main($id, $mode)
    {
        global $config, $db, $phpbb_log, $request, $template, $user, $phpbb_root_path, $phpEx, $phpbb_container;

        $this->config = $config;
        $this->config_text = $phpbb_container->get('config_text');
        $this->db = $db;
        $this->log = $phpbb_log;
        $this->request = $request;
        $this->template = $template;
        $this->user = $user;
        $this->phpbb_root_path = $phpbb_root_path;
        $this->php_ext = $phpEx;

        // Add the posting lang file needed by BBCodes
        $this->user->add_lang(array('posting'));

        // Add the Newsscroll ACP lang file
        $this->user->add_lang_ext('hifikabin/newsscroll', 'info_acp_newsscroll');

        // Load a template from adm/style for our ACP page
        $this->tpl_name = 'acp_newsscroll_config';

        // Set the page title for our ACP page
        $this->page_title = 'ACP_NEWSSCROLL_CONFIG';

        // Define the name of the form for use as a form key
        $form_name = 'acp_newsscroll_config';
        add_form_key($form_name);

        // Set an empty error string
        $error = '';

        // Include files needed for displaying BBCodes
        if (!function_exists('display_custom_bbcodes'))
        {
            include($this->phpbb_root_path . 'includes/functions_display.' . $this->php_ext);
        }

        // Get all Newsscroll data from the config_text table in the database
        $data = $this->config_text->get_array(array(
            'news_scroll_text',
            'news_scroll_uid',
            'news_scroll_bitfield',
            'news_scroll_options',
            'news_scroll_speed',
        ));

        $submit = $this->request->is_set_post('submit');

        if ($submit)
        {
            if (!check_form_key('acp_newsscroll_config'))
            {
                trigger_error('FORM_INVALID');
            }
            $this->config->set('newsscroll_activated', $this->request->variable('newsscroll_activated', 0));
            $this->config->set('newsscroll_index', $this->request->variable('newsscroll_index', 0));
            $this->config->set('newsscroll_member', $this->request->variable('newsscroll_member', 0));

            // Get new Newsscroll text from the form
            $data['news_scroll_text'] = $this->request->variable('newsscroll_text', '', true);
            $data['news_scroll_speed'] = $this->request->variable('newsscroll_speed', '', true);

            // Prepare Newsscroll text for storage
            generate_text_for_storage(
                $data['news_scroll_text'],
                $data['news_scroll_uid'],
                $data['news_scroll_bitfield'],
                $data['news_scroll_options'],
                !$this->request->variable('disable_bbcode', false),
                !$this->request->variable('disable_magic_url', false),
                !$this->request->variable('disable_smilies', false)
            );

            // Store the Newsscroll settings to the config_table in the database
            $this->config_text->set_array(array(
                'news_scroll_text'          => $data['news_scroll_text'],
                'news_scroll_uid'           => $data['news_scroll_uid'],
                'news_scroll_bitfield'      => $data['news_scroll_bitfield'],
                'news_scroll_options'       => $data['news_scroll_options'],
                'news_scroll_speed'         => $data['news_scroll_speed'],
            ));

            trigger_error($this->user->lang['NEWSSCROLL_CONFIG_SAVED'] . adm_back_link($this->u_action));
        }

            // Get the Newscroll data for the preview
            $news_scroll_text_preview = generate_text_for_display($data['news_scroll_text'], $data['news_scroll_uid'], $data['news_scroll_bitfield'], $data['news_scroll_options']);

            // Prepare the Newsscroll text for editing inside the textbox
            $news_scroll_text_edit = generate_text_for_edit($data['news_scroll_text'], $data['news_scroll_uid'], $data['news_scroll_options']);

            $template->assign_vars(array(
            'NEWSSCROLL_ACTIVATED'      => (!empty($this->config['newsscroll_activated'])) ? true : false,
            'NEWSSCROLL_INDEX'          => (!empty($this->config['newsscroll_index'])) ? true : false,
            'NEWSSCROLL_MEMBER'         => (!empty($this->config['newsscroll_member'])) ? true : false,
            'S_ERROR'                   => (sizeof($error)) ? true : false,

            'NEWSSCROLL_TEXT'           => $news_scroll_text_edit['text'],
            'NEWSSCROLL_PREVIEW'        => $news_scroll_text_preview,
            'NEWSSCROLL_SPEED'          => $data['news_scroll_speed'],

            'S_BBCODE_DISABLE_CHECKED'      => !$news_scroll_text_edit['allow_bbcode'],
            'S_SMILIES_DISABLE_CHECKED'     => !$news_scroll_text_edit['allow_smilies'],
            'S_MAGIC_URL_DISABLE_CHECKED'   => !$news_scroll_text_edit['allow_urls'],

            'BBCODE_STATUS'         => $this->user->lang('BBCODE_IS_ON', '<a href="' . append_sid("{$this->phpbb_root_path}faq.{$this->php_ext}", 'mode=bbcode') . '">', '</a>'),
            'SMILIES_STATUS'        => $this->user->lang('SMILIES_ARE_ON'),
            'IMG_STATUS'            => $this->user->lang('IMAGES_ARE_ON'),
            'FLASH_STATUS'          => $this->user->lang('FLASH_IS_ON'),
            'URL_STATUS'            => $this->user->lang('URL_IS_ON'),

            'S_BBCODE_ALLOWED'      => true,
            'S_SMILIES_ALLOWED'     => true,
            'S_BBCODE_IMG'          => true,
            'S_BBCODE_FLASH'        => true,
            'S_LINKS_ALLOWED'       => true,
            'U_ACTION'              => $this->u_action,
        ));

        // Build custom bbcodes array
        display_custom_bbcodes();
    }
}
