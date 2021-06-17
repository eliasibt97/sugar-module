<?php

$dictionary['isies_math'] = array(
    'table' => 'isies_math',
    'fields' => array(
        'numero_uno' => [
            'required' => true,
            'name' => 'numero_uno',
            'vname' => 'LBL_NUMERO_UNO',
            'type' => 'decimal',
            'len' => 7,
            'precision' => 2,
            'comments' => 'Primer numero a procesar',
            'help' => 'Primer numero a procesar',
            'importable' => false,
            'audited' => 0,
        ],
        'numero_dos' => [
            'required' => true,
            'name' => 'numero_dos',
            'vname' => 'LBL_NUMERO_DOS',
            'type' => 'decimal',
            'len' => 7,
            'precision' => 2,
            'comments' => 'Segundo numero a procesar',
            'help' => 'Segundo numero a procesar',
            'importable' => false,
            'audited' => 0,
        ],
        'resultado' => [
            'required' => true,
            'name' => 'resultado',
            'vname' => 'LBL_RESULTADO',
            'type' => 'decimal',
            'len' => 11,
            'precision' => 2,
            'comments' => '',
            'help' => '',
            'audited' => 0,
        ],
        'tipo' => [
            'required' => true,
            'name' => 'tipo',
            'vname' => 'LBL_TIPO',
            'type' => 'varchar',
            'len' => 20,
            'importable' => false,
            'audited' => 1,
        ],
    )

);

?>