<?php

require_once('isies_math_sugar.php');

class isies_math extends isies_math_sugar {


    function __construct()
    {
        parent::__construct();
    }

    function retrieve($id = -1, $encode = true, $deleted = true)
    {
        return parent::retrieve($id, $encode, $deleted);
    }

    function create_new_list_query($order_by, $where, $filter = array(), $params = array(), $show_deleted = 0, $join_type = '', $return_array = false, $parentbean = null, $singleSelect = false)
    {
        return parent:: create_new_list_query($order_by, $where, $filter, $params, $show_deleted, $join_type, $return_array, $parentbean, $singleSelect);
    }
}

?>