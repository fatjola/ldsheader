<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

include('include/adodb/adodb.inc.php');

if(version_compare(phpversion(), '5.4') < 0) {
	$serverPhpVersion = phpversion();
	require_once('phpversionfail.php');
	die();
}

require_once('include/install/language/en_us.lang.php');
require_once('include/install/resources/utils.php');
require_once('vtigerversion.php');	
global $installationStrings, $vtiger_current_version, $coreBOS_app_version;

@include_once('install/config.db.php');

$the_file = 'CheckSystem.php';
Common_Install_Wizard_Utils::checkFileAccessForInclusion("install/".$the_file);
$_REQUEST['filename'] = 'SetMigrationConfig.php';
$_REQUEST['file'] = 'CheckSystem.php';
$_REQUEST['migrate'] = 'true';

include("install/".$the_file);
?>