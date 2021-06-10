<?php

class isies_math {

    public int   $id;
    public float $numero_uno;
    public float $numero_dos;
    public float $resultado;
    public int   $tipo;

    public function __construct($id, $numero_uno, $numero_dos, $resultado, $tipo )
    {
        $this->id = $id ?? 0;
        $this->numero_uno = $numero_uno;
        $this->numero_dos = $numero_dos;
        $this->resultado = $resultado;
        $this->tipo = $tipo;
    }

    public static function fromArray(array $queryResponse) {
        return new isies_math(
            $queryResponse['id'] ?? 0,
            $queryResponse['numero_uno'],
            $queryResponse['numero_dos'],
            $queryResponse['resultado'],
            $queryResponse['tipo']);
    } 
}

?>