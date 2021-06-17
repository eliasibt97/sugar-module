<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 

if (!$GLOBALS['sgc_licencia']->productoRi505CA()) { sgc_license_redirect(); }

global $mod_strings,$app_strings,$current_user;