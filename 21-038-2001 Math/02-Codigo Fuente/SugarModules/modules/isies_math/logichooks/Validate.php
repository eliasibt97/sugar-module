<?php

class Validate {

    /**
     * Verifica que el número no contenga letras o caracteres especiales
     * @param float $numero
     * @return bool
     */
    public function validateNumero($numero) {
        if(preg_match("/[a-zA-Z]/", $numero)) return false;
        return true;
    }

}

?>