<?php

class isies_math_sugar extends Basic {

    public $new_schema = true;
    public $module_dir = 'isies_math';
    public $object_name = 'isies_math';
    public $table_name = 'isies_math';
    public $importable = false;
    public $disable_row_level_security = true;

    /* Created by Sugar */
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $created_by;
    public $description;
    public $deleted;

    /* Created by IsiesMath */
    public $numero_uno;
    public $numero_dos;
    public $resultado;
    public $tipo;

    public function __construct()
    {
        parent::__construct();
    }

    function bean_implements($interface) {
        switch ($interface) {
            case 'ACL': return true;
        }
        return false;
    }
}

?>