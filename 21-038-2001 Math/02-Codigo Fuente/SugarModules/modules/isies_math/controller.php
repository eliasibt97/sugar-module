<?php

require_once("backend/app/MathModel.php");
require_once("logichooks/Validate.php");

class isies_math extends SugarController {

    private $model;
    private $validate;

    public function __construct() {
        if(!$this->model) $this->model = new MathModel();
        if(!$this->validate) $this->validate = new Validate();
    }

    public function action_save() {
        $data = [];
        $data['num1'] = $_REQUEST['numero_uno'];
        $data['num2'] = $_REQUEST['numero_dos'];
        $data['tipo'] = $_REQUEST['tipo'];
        $data['resultado'] = $_REQUEST['resultado'];

        
        if(!$this->validate->validateData($data)) return [];

        $num1 = $data['num1'];
        $num2 = $data['num2'];
        $resultado = $data['resultado'];
        $tipo = $data['tipo'];

        return $this->model->make($num1, $num2, $tipo, $resultado);
    }

    

}

?>