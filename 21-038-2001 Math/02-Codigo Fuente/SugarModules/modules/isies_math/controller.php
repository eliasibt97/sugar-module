<?php

require_once("logichooks/Validate.php");

class isies_mathController extends SugarController {

    private $validate;
    public function __construct() {

        if(!$this->validate) $this->validate = new Validate();
    }

    public function action_save() {
        $data = [];
        $data['num1'] = $_REQUEST['numero_uno'];
        $data['num2'] = $_REQUEST['numero_dos'];
        $data['resultado'] = $_REQUEST['resultado'];

        if(!$this->validate->validateData($data)) return [];

        parent::action_save();
        return true;
    }

    /*function action_listview(){
        $this->view_object_map['bean'] = $this->bean;
        $this->view = 'list';
    }*/

    function action_editview() {
        $this->view = 'edit';
    }
    
    /*
     
    function action_detailview()
    {
        if (empty($this->bean->id)) {
            SugarApplication::redirect('index.php?module=' . $this->module);
        }

        $this->view = 'detail';
    }*/

}

?>