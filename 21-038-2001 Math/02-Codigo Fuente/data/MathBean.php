<?php

class MathBean
{
    /**
     * @return String query de creacón de tabla necesaria para registrar cada acción ejecurada por el modulo
     */
    public function install() {

        /*$types = "CREATE TABLE isies_math_tipos (
            id INT NOT NULL,
            descripcion TEXT(20),
            caracter CHAR(5) NULL,
            PRIMARY KEY (id)
        );";*/

        $mainTable = "CREATE TABLE isies_math (
            id CHAR(36) NOT NULL PRIMARY KEY,
            numero_uno DECIMAL(5,2) NOT NULL,
            numero_dos DECIMAL(5,2) NOT NULL,
            resultado DECIMAL(5,2) NOT NULL,
            tipo VARCHAR(20));";
        return $mainTable;
    }

    public function uninstall() {
        $drop = "DROP TABLE isies_math;";
        return $drop;
    }

}

?>