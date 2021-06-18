<?php
$manifest = array (
    'acceptable_sugar_versions' => array (),
    'acceptable_sugar_flavors' => array('CE', 'PRO','ENT'),
    'readme'=>'',
    'key'=>'isies',
    'author' => 'Pegasus',
    'description' => 'Calculadora integrada para CRM Sugar',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'isies_math',
    'published_date' => '2021-06-08 09:00:00',
    'type' => 'module',
    'Pegasus' => '1',
    'version' => '1.2.3',
    'remove_tables' => 'prompt',
);
$installdefs = array ( 
    'id' => 'ade_instalador',
    'beans' => array (
        0 => array (
            'module' => 'isies_math',
            'class' => 'isies_math',
            'path' => 'modules/isies_math/isies_math.php',
            'tab' => true,
        ),
    ),
    'copy' => array (
        0 => array (
            'from' => '<basepath>/SugarModules/modules/isies_math', // Directorio origen del archivo
            'to' => 'modules/isies_math', //Directorio destino del archivo
        ),
    ),
    'language' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
            'to_module' => 'application',
            'language' => 'en_us',
        ),
        1 => array(
            'from' => '<basepath>/SugarModules/language/application/es_es.lang.php',
            'to_module' => 'application',
            'language' => 'es_es',
        ),
    ),
    'administration'=> array (
        array ( 
            'from'=>'<basepath>/administration/mathadminoption.php',
            'to' => 'modules/Administration/mathadminoption.php', 
            ),
        ),
    'logic_hooks'=>array (
            array (
            'module' =>'isies_math',
            'hook' =>'Validate',
            'order' =>10,
            'description' =>'Valida todos los campos recibidos por POST',
            'file' =>'modules/isies_math/logichooks/Validate.php',
            'class' =>'Validate',
            'function' =>'validateNumero',
            ),
        ),
    'includes' => array (
        0 =>  array (
            'file' => 'custom_pegasus/utilerias/javascripts/XHConn.js',
            ),
        1 => array (
            'file' => 'modules/isies_math/javascripts/validaciones.js',
            ),
        ),
    );

?>