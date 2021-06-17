<?php

    $viewdefs['isies_math'] = [
        "EditView" => [
            "templateMeta" =>
            array('maxColumns' => '2',
            'widths' => array(
                array('label' => '20', 'field' => '20'),
                array('label' => '20', 'field' => '20')
            ),
            'includes' => array(
                0 => array('file' => 'custom_pegasus/utilerias/javascripts/jquery-1.10.2.min.js',),
                3 => array('file' => 'modules/isies_prueba_modulo/javascripts/editView.js',),
            ),
            'form' => array(
                'buttons' => array(
                    0 => array('customCode' =>
                        '<input title="Guardar [Alt+S]" accesskey="S" class="button" type="submit" name="button" id="button" value="Guardar" onclick="this.form.action.value=\'Save\'; return check_form(\'EditView\')" >',),
                    1 => array('customCode' =>
                        '<input title="Cancelar [Alt+X]" accesskey="X" class="button" onclick="this.form.action.value=\'detailview\'; this.form.module.value=\'isies_prueba_modulo\'; this.form.record.value=\'{$fields.id.value}\';" type="submit" name=button value="Cancelar">', ),
                ),
                'hidden' => array (
                ),
            ),
        ),
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