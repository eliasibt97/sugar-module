<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not a Valid Entry Point');

require_once('include/MVC/View/SugarView');
class ViewSidequickcreate extends SugarView {
    function __construct()
    {
        parent::__construct();
    }

    function display() {
        return '';
    }
}

?>