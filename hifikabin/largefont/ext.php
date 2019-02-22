<?php
/**
*
* Large Font extension for the phpBB Forum Software package.
*
* @copyright 2016 HiFiKabin
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/
namespace hifikabin\largefont;

/**
* Extension class for custom enable/disable/purge actions
*/
class ext extends \phpbb\extension\base
{
	/**
	 * Enable extension if phpBB version requirement is met
	 *
	 * @return bool
	 * @access public
	 */
	public function is_enableable()
	{
		$enableable = phpbb_version_compare(PHPBB_VERSION, '3.2.0@dev', '>=');
		if (!$enableable)
		{
			$user = $this->container->get('user');
			$user->add_lang('acp/extensions');
			trigger_error($user->lang('EXTENSION_NOT_ENABLEABLE'), E_USER_WARNING);
		}

		return true;
	}
}
