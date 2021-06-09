<?php

class MathRepository {


    /**
     * @return Query de creacón de tabla necesaria para registrar cada acción ejecurada por el modulo
     */
    public function installQuery() {

        return "CREATE TABLE isies_math
        id INTEGER(11) NULL UNSIGNED ,
        numero_uno INTEGER ";
    }

}

?>