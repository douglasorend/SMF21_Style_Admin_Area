<?php
/**********************************************************************************
* Subs-SMF21_Style.php - Function to reorganize Admin menu
*********************************************************************************
* This program is distributed in the hope that it is and will be useful, but
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANsectionILITY
* or FITNESS FOR A PARTICULAR PURPOSE .
**********************************************************************************/

function SMF21_Style_Admin_Area(&$areas)
{
	global $txt;
	if (isset($areas['config']['areas']['modsettings']['subsections']['hooks']))
	{
		$areas['maintenance']['areas']['maintain']['subsections']['hooks'] = array($txt['hooks_title_list'], 'admin_forum');
		unset($areas['config']['areas']['modsettings']['subsections']['hooks']);
	}
	if (isset($areas['mods']['areas']['modsettings']['subsections']['hooks']))
	{
		$areas['maintenance']['areas']['maintain']['subsections']['hooks'] = array($txt['hooks_title_list'], 'admin_forum');
		unset($areas['mods']['areas']['modsettings']['subsections']['hooks']);
	}
}

function SMF21_list_integration_hooks($return_config = false)
{
	global $sourcedir;
	require_once($sourcedir . '/ManageSettings.php');
	loadGeneralSettingParameters(array(), 'general');
	if (function_exists('list_integration_hooks'))
		list_integration_hooks();
	else
		maintain_routine();
}

?>