<?php

$dictionary['isies_math_tipos'] = [
    'table' => 'isies_math_tipos',
    'fields' => [
        'descripcion' => [
            'required' => true,
            'name' => 'descripcion',
            'vname' => 'LBL_DESCRIPCION',
            'type' => 'text',
            'len' => 20,
            'massupdate' => 0,
            'comments' => 'Tipo de proceso',
            'help' => 'Multiplicar, Dividir, Restar, Sumar',
            'importable' => false,
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => 1,
            'reportable' => 0,
        ],
        'caracter' => [
            'required' => false,
            'name' => 'caracter',
            'vname' => 'LBL_CARACTER',
            'type' => 'char',
            'len' => 5,
            'massupdate' => 0,
            'comments' => 'Caractes especial para identificar el proceso matemático',
            'help' => 'Multiplicar = *, Restar = -, Sumar = +, Dividir = /',
            'importable' => false,
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => 1,
            'reportable' => 0,
        ]
    ]
];

?>