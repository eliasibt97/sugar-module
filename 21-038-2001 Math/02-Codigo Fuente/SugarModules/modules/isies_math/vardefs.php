<?php

$dictionary['isies_math'] = array(
    'table' => 'isies_math',
    'fields' => array(
        'numero_uno' => array(
            'required' => true,
            'name' => 'numero_uno',
            'vname' => 'LBL_NUMERO_UNO',
            'type' => 'decimal',
            'len' => 5,
            'precision' => 2,
            'comments' => 'Primer numero a procesar',
            'help' => 'Primer numero a procesar',
            'importable' => false,
            'audited' => 0,
        ),
        'numero_dos' => array(
            'required' => true,
            'name' => 'numero_dos',
            'vname' => 'LBL_NUMERO_DOS',
            'type' => 'decimal',
            'len' => 5,
            'precision' => 2,
            'comments' => 'Segundo numero a procesar',
            'help' => 'Segundo numero a procesar',
            'importable' => false,
            'audited' => 0,
        ),
        'resultado' => array(
            'required' => true,
            'name' => 'resultado',
            'vname' => 'LBL_RESULTADO',
            'type' => 'decimal',
            'len' => 5,
            'precision' => 2,
            'comments' => '',
            'help' => '',
            'audited' => 0,
        ),
        'tipo' => array(
            'required' => true,
            'name' => 'tipo',
            'vname' => 'LBL_TIPO',
            'type' => 'varchar',
            'len' => 20,
            'importable' => false,
            'audited' => 1,
        ),
    )

);

if (!class_exists('VardefManager') ) {
    require_once('include/SugarObjects/VardefManager.php');
}

VardefManager::createVardef('isies_math', 'isies_math', array('basic'));

?>