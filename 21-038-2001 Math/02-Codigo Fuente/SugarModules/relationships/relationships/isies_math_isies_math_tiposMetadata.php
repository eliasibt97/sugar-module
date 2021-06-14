<?php

$dictionary["isies_math_isies_math_tipos"] = array (
    'true_relationship_type' => 'many-to-one',
    'relationships' => array (
        'isies_math_relationships' => array (
            'lhs_module' => 'isies_math',
            'lhs_table' => 'isies_math',
            'lhs_key' => 'tipo_id',
            'rhs_module' => 'isies_math_tipos',
            'rhs_table' => 'isies_math_tipos',
            'rhs_key' => 'id',// Campo de relación
            'relationship_type' => 'many-to-one', //Tipo de relación.
        ),
    ),
);

?>