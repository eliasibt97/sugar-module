<?php

class MathBean
{
    /**
     * @return String query de creacón de tabla necesaria para registrar cada acción ejecurada por el modulo
     */
    public function install() {

        $types = "CREATE TABLE isies_math_tipos (
            id INT NOT NULL,
            descripcion TEXT(20),
            caracter CHAR(5) NULL,
            PRIMARY KEY (id)
        );";

        $mainTable = "CREATE TABLE isies_math (
            id INT NOT NULL,
            numero_uno DECIMAL(5,2) NOT NULL,
            numero_dos DECIMAL(5,2) NOT NULL,
            resultado DECIMAL(5,2) NOT NULL,
            tipo_id INT NOT NULL,
            PRIMARY KEY (id),
            FOREIGN KEY (tipo_id) REFERENCES isies_math_tipos(id)
        )";
        return $types.$mainTable;
    }

}

?>