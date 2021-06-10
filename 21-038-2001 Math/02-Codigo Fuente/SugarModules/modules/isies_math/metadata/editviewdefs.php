<?php

    $viewdefs['isies_math'] = [
        "EditView" => [
            "templateMeta" => [
                'buttons' =>
                    [
                    0 => [
                    'customCode' => '{php}
                        $estado = $this->_tpl_vars[fields][status][value];
                    {/php}
                    < input type="submit" name="calcular" id="calcular" value="{$MOD.LBL_CALCULAR}" ="this.form.action.value=\'calcular\';" >
                    ', 
                    ],
                ],
            ],
            "panels" => [
                "default" => [
                    0 => [
                        0 => [
                            'name' => 'numero_uno',
                            'label' => 'LBL_NUMERO_UNO'
                        ],
                    ],
                    1 => [
                        0 => [
                            'name' => 'numero_dos',
                            'label' => 'LBL_NUMERO_DOS ]'
                        ],
                    ],
                    2 => [
                        0 => [
                            'name' => 'resultado',
                            'label' => 'LBL_RESULTADO'
                        ]
                    ],  
                    3 => [
                        0 => [
                            'name' => 'tipo',
                            'label' => 'LBL_TIPO'
                        ]
                    ]
                ]
            ]
        ]
    ];

?>