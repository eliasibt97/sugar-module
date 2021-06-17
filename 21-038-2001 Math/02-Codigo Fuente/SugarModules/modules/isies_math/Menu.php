<?php
    if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    global $mod_strings,$app_strings,$current_user, $sgc_configuracion;

    if (ACLController::checkAccess('isies_math', 'edit', true)) {
        $module_menu [] = array(
            'index.php?module=isies_math&action=EditView',
            translate('LNK_NEW_RECORD', 'isies_math'),
            'Createisies_math',
            'isies_math'
        );
    }

    if (ACLController::checkAccess('isies_math', 'list', true)) {
        $module_menu [] = array(
            'index.php?module=isies_math&action=index&return_module=isies_math&return_action=index',
            translate('LNK_LIST', 'isies_math'),
            'Listisies_math',
            'isies_math'
        );
    }