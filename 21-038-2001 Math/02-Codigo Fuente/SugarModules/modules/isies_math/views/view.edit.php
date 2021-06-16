<?php

require_once("include/MVC/View/views/view.edit.php");

class isies_mathViewEdit extends ViewEdit {
    
    function display() {
        global $sgc_configuracion;

        if( file_exists('cache/modules/isies_math/EditView.tpl') ) {
            unlink('cache/modules/isies_math/EditView.tpl');
        }

        $this->ss->assign('modoOperacion', $sgc_configuracion->id(3100));
        $this->ss->assign('sgc_configuracion', $sgc_configuracion);

        parent::display();
    }
}

?>