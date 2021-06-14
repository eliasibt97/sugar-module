<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class Validate {

    /**
     * Verifica que el número no contecta letras o caracteres especiales
     * @param float $numero
     * @return bool
     */
    public function validateNumero($numero) {
        if(preg_match("/[a-zA-Z]/", $numero)) return false;
        return true;
    }

}

?>