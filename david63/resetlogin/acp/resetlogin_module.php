<?php
/**
*
* @package Reset User Login Attempts
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\resetlogin\acp;

class resetlogin_module
{
	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var string phpBB root path */
	protected $phpbb_root_path;

	/** @var string PHP extension */
	protected $phpEx;

	public $u_action;

	function main($id, $mode)
	{
		global $request, $template, $user, $db, $phpbb_root_path, $phpEx, $phpbb_log;

		$this->request		= $request;
		$this->template 	= $template;
		$this->user			= $user;
		$this->db			= $db;
		$this->root_path	= $phpbb_root_path;
		$this->phpEx		= $phpEx;
		$this->phpbb_log	= $phpbb_log;

		$this->tpl_name		= 'reset_login';
		$this->page_title	= $this->user->lang('RESET_LOGIN');
		$form_key			= 'reset_login';
		add_form_key($form_key);

		$submit 		= ($this->request->is_set_post('submit')) ? true : false;
		$reset_username	= $this->request->variable('reset_username', '', true);

		$errors = array();

		if ($submit)
		{
			if (!check_form_key($form_key))
			{
				trigger_error($this->user->lang['FORM_INVALID']);
			}

			if (!empty($reset_username))
			{
				$sql = 'SELECT user_id, user_login_attempts
					FROM ' . USERS_TABLE . "
					WHERE username_clean = '" . $this->db->sql_escape(utf8_clean_string($reset_username)) . "'";
				$result = $this->db->sql_query($sql);
				
				$row = $this->db->sql_fetchrow($result);
				$this->db->sql_freeresult($result);

				$user_id		= $row['user_id'];
				$login_attempts	= $row['user_login_attempts'];

				if (!$user_id)
				{
					$errors[] = $this->user->lang['NO_USER'];
				}

				if (!$login_attempts)
				{
					$errors[] = $this->user->lang['NO_LOGINS'];
				}
			}
			else
			{
				$errors[] = $this->user->lang['NO_USER_SPECIFIED'];
			}

			if (empty($errors))
			{
				$sql = 'UPDATE ' . USERS_TABLE . '
					SET user_login_attempts = 0
					WHERE user_id = ' . (int) $user_id;
				$this->db->sql_query($sql);

				$this->phpbb_log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_USER_LOGIN_RESET',  time(), array($login_attempts, $reset_username));
				$this->phpbb_log->add('user', $this->user->data['user_id'], $this->user->ip, 'LOG_USER_LOGIN_RESET', time(), array('reportee_id' => $this->user->data['username'], $login_attempts, $reset_username));
				trigger_error(sprintf($this->user->lang['USER_LOGIN_RESET'], $login_attempts, $reset_username) . adm_back_link($this->u_action));
			}
		}

		$this->template->assign_vars(array(
			'ERROR_MSG'			=> implode('<br />', $errors),
			'RESET_USERNAME'	=> (!empty($user_id)) ? $reset_username : '',

			'S_ERROR'			=> (sizeof($errors)) ? true : false,
			'U_ACTION'			=> $this->u_action,
			'U_RESET_USERNAME'	=> append_sid("{$this->root_path}memberlist.$this->phpEx", 'mode=searchuser&amp;form=resetlogin&amp;field=reset_username&amp;select_single=true'),
		));
	}
}
