<?php

require_once("include/MVC/View/views/view.edit.php");

class isies_mathViewEdit extends ViewEdit {
    
    function preDisplay()
    {
        require_once('modules/'.$this->module.'/metadata/metafiles.php');
        $metadataFile = 'modules/'.$this->module.'/metadata/editviewdefs.php';
        $this->ev = new EditView();
        $this->ev->ss =& $this->ss;
        $this->ev->setup($this->module, $this->bean, $metadataFile, 'include/EditView/EditView.tpl');
    }

    function display()
    {
        $this->ev->process();
        echo $this->ev->display($this->showTitle);
    }
}

?>