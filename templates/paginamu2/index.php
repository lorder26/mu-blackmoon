<?php
/**
 * WebEngine CMS
 * https://webenginecms.org/
 * 
 * @version 1.2.0
 * @author Lautaro Angelico <http://lautaroangelico.com/>
 * @copyright (c) 2013-2019 Lautaro Angelico, All Rights Reserved
 * 
 * Licensed under the MIT license
 * http://opensource.org/licenses/MIT
 */

if(!defined('access') or !access) die();
include('inc/template.functions.php');

// Modules with disabled sidebar
$disabledSidebar = array(
	'rankings',
);

// max online
$templateMaxOnline = 100;

// server info
$srvInfoCache = LoadCacheData('server_info.cache');
if(is_array($srvInfoCache)) {
	$srvInfo = explode("|", $srvInfoCache[1][0]);
}

// Override default module to "home"
if(!check_value($_REQUEST['page'])) {
	$_REQUEST['page'] = 'home';
}

// Load the template index
if($_REQUEST['page'] == 'home') {
	include_once(__PATH_TEMPLATE_ROOT__ . 'index.home.php');
} else {
	include_once(__PATH_TEMPLATE_ROOT__ . 'index.default.php');
}