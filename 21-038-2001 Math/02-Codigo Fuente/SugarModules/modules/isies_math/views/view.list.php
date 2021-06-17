<?php

require_once('include/MVC/View/views/view.list.php');

class isies_mathViewList extends ViewList
{

    function preDisplay()
    {
        parent::preDisplay();
        $this->lv->export = false;
        $this->lv->delete = false;
        $this->lv->showMassupdateFields = false;
    }

    function listViewPrepare()
    {

        if (empty($_REQUEST['orderBy'])) {
            $_REQUEST['orderBy'] = 'tipo';
            $_REQUEST['sortOrder'] = 'DESC';
        }

        parent::listViewPrepare();
    }

    function listViewProcess()
    {
        $this->processSearchForm();
        $this->lv->searchColumns = $this->searchForm->searchColumns;
        $this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);

        if(!$this->headers)
            return;
        if(empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false){
            $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
            echo get_form_header($GLOBALS['mod_strings']['LBL_LIST_FORM_TITLE'] . $savedSearchName, '', false);
            echo $this->lv->display();
        }
    }


}