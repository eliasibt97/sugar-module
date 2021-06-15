<?php
require_once("app/MathModel.php");

class MathOrchester {

    private $model;

    public function __construct()
    {
        if(is_null($this->model)) $this->model = new MathModel();
        return $this->model;    
    }
    
    public function list() {
        return $this->model->index();
    }

}

?>