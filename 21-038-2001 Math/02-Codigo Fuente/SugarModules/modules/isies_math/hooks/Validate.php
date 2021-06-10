<?php

abstract class Validate {

    public function __construct() { }

    /**
     * Verifica que el número no contecta letras o caracteres especiales
     * @param float $numero
     * @return bool
     */
    public function numero($numero) {
        if(preg_match("/[a-zA-Z]/", $numero)) return false;
        return true;
    }

}

?>