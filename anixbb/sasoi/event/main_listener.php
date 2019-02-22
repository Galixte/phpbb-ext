<?php
/**
 *
 * Show ACP statistics on index. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Anisor, http://anixbb.ro
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace AnixBB\SASOI\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Show ACP statistics on index Event listener.
 */
class main_listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;
	
	/** @var \phpbb\config\config */
	protected $config;
	
	/** @var \phpbb\user */
	protected $user;
	
	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config, \phpbb\user $user)
	{
		$this->template = $template;
		$this->config = $config;
		$this->user = $user;
	}
	
	static public function getSubscribedEvents()
	{
		return array(
			'core.index_modify_page_title'	=> 'display_acp_statistics_on_index',
		);
	}
	
	public function display_acp_statistics_on_index($event)
	{
		// Here goes the language file
		$this->user->add_lang_ext('anixbb/SASOI', 'sasoi');
		
		$total_posts = $this->config['num_posts'];
		$total_topics = $this->config['num_topics'];
		$total_users = $this->config['num_users'];
		$total_files = $this->config['num_files'];
		$start_date = $this->user->format_date($this->config['board_startdate']);

		$boarddays = (time() - $this->config['board_startdate']) / 86400;

		$posts_per_day = sprintf('%.2f', $total_posts / $boarddays);
		$topics_per_day = sprintf('%.2f', $total_topics / $boarddays);
		$users_per_day = sprintf('%.2f', $total_users / $boarddays);
		$files_per_day = sprintf('%.2f', $total_files / $boarddays);
		
		if ($posts_per_day > $total_posts)
		{
			$posts_per_day = $total_posts;
		}

		if ($topics_per_day > $total_topics)
		{
			$topics_per_day = $total_topics;
		}

		if ($users_per_day > $total_users)
		{
			$users_per_day = $total_users;
		}

		if ($files_per_day > $total_files)
		{
			$files_per_day = $total_files;
		}
		
		// assign the forum stats to the template.
		$this->template->assign_vars(array(
			'POSTS_PER_DAY'		=> $posts_per_day,
			'TOPICS_PER_DAY'	=> $topics_per_day,
			'USERS_PER_DAY'		=> $users_per_day,
			'FILES_PER_DAY'		=> $files_per_day,
			'START_DATE'		=> $start_date,
		));
	}
}
