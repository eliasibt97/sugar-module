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
    'version' => '1.2.0',
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
    //Cada archivo a copiar se especifica como un arreglo, donde incrementaremos el indice dependiendo de los archivos agregados. 
        0 => array (
            'from' => '<basepath>/SugarModules/modules/isies_math', // Directorio origen del archivo
            'to' => 'modules/isies_math', //Directorio destino del archivo
            ),
        ),
        // Define los archivos de lenguaje que se utilizara el módulo, aquí se definirán tanto archivos de listas desplegables como los propios del módulo
    /* 'language' => array (
        0 => array (
            'from' => //Directorio origen
            '/SugarModules/language/application/en_us.lang.php',
            'to_module' => 'application', //Destino, se especifica la carpeta a donde se copiara el archivo, puede asignarse a application, y se guardara en la instancia principal, o se guardara en el modulo especificado.
            'language' => 'en_us', //Al idioma donde se agregaran los archivos, esto define cuando se utilizaran los archivos al momento de ejecución.
            ),
        1 => array (
            'from' => //Directorio origen
            '/SugarModules/language/application/es_es.lang.php',
            'to_module' => 'application', //Destino, se especifica la carpeta a donde se copiara el archivo, puede asignarse a application, y se guardara en la instancia principal, o se guardara en el modulo especificado.
            'language' => 'es_es', //Al idioma donde se agregaran los archivos, esto define cuando se utilizaran los archivos al momento de ejecución.
            ),
        ), */
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
    /*Declaracion de layouts, se agregan definiciones de relaciones
    'layoutdefs' => array (
        0 => array (
            'from' => '/SugarModules/relationships/layoutdefs/isies_math.php',
            'to_module' => 'isies_math',
            ),
        ),*/
    'includes' => array (
        0 =>  array (
            'file' => 'custom_pegasus/utilerias/javascripts/XHConn.js',
            ),
        1 => array (
            'file' => 'modules/isies_math/javascripts/validaciones.js',
            ),
        ),
    /* 'vardefs' => array (
        0 => array (
            'from' => '<basepath>/SugarModules/relationships/vardefs/isies_math.php',
            'to_module' => 'isies_math',
        ),
    )*/
);

?>