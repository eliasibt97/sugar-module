<?php

require_once("backend/app/MathModel.php");
require_once("logichooks/Validate.php");

class isies_mathController extends SugarController {

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
        $data['resultado'] = $_REQUEST['resultado'];

        if(!$this->validate->validateData($data)) return [];

        $num1 = $data['num1'];
        $num2 = $data['num2'];
        $resultado = $data['resultado'];
        $tipo = $_REQUEST['tipo'];

        return $this->model->make($num1, $num2, $tipo, $resultado);
    }

    function action_listview(){
        $this->validarUsuarioNuevoPass();
        $this->view_object_map['bean'] = $this->bean;
        $this->view = 'list';
    }

    function action_editview() {
        $this->validarUsuarioNuevoPass();
        $this->view = 'edit';
    }

    function validarUsuarioNuevoPass() {
        if(sgc_usuario_nuevo_pass()){
            $this->redirect_url = 'index.php?module=User&action=ChangePassword';
        }
    }
    

}

?>