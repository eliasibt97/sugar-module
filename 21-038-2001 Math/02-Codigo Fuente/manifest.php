<?php
$manifest = array (
    'acceptable_sugar_versions' => array (), //Version de sugar compatible con el módulo, regularmente se deja en blanco
    'acceptable_sugar_flavors' => array('CE', 'PRO','ENT'), // Tipo de sugacrm con los que sera compatible el módulo
    'readme'=>'', // archivo readme
    'key'=>'isies', //Prefijo del módulo
    'author' => 'Pegasus', //Autor del modulo
    'description' => 'Calculadora integrada para CRM Sugar', //Descripción del módulo.
    'icon' => '', //icono usado por el módulo
    'is_uninstallable' => true, // Definimos si se desinstalara el modulo
    'name' => 'isies_math', // Nombre del paquete que se esta instalando
    'published_date' => '2021-06-08 09:00:00', // fecha de publicación del instalador del modulo
    'type' => 'module', // Tipo de estructura del instalador.
    'Pegasus' => '1', // Autorización de Pegasus para la instalación del módulo
    'version' => '1.0.0',//Version del modulo
    'remove_tables' => 'prompt', //Especifica la remoción de las tablas creadas para el módulo.
); 
//Esta primera parte contiene la descripción del instalador en general, ahora se definira el apartado installdefs, que regularmente contiene la estructura de copiado del instalador.
$installdefs = array ( // inicio del arreglo de instalación
    'id' => 'ade_instalador', //identificador del instalador.
    'beans' => array (
        0 => array (
            'module' => 'isies_math',
            'class' => 'isies_math',
            'path' => 'modules/isies_math/isies_math.php',
            'tab' => true,
            ), // Pueden agregarse las definiciones pertinentes a 'N' módulos, siendo cada uno un nuevo elemento del arreglo
        ), // Se declara la clase principal para el modulo a instalar
    'image_dir' => '/icons', //Se define directorio de donde se copiaran las imágenes del módulo.  
    //Aquí se especifican los archivos que se desea se copien al instalar el modulo, pueden agregarse los archivos que sean necesarios, ya sean propios de sugarcrm o agregados por Pegasus para le extensión de alguna funcionalidad.
    'copy' => array (
    //Cada archivo a copiar se especifica como un arreglo, donde incrementaremos el indice dependiendo de los archivos agregados. 
        0 => array (
            'from' => '/SugarModules/modules/isies_math', // Directorio origen del archivo
            'to' => 'modules/isies_math', //Directorio destino del archivo
            ),
        ),
        // Define los archivos de lenguaje que se utilizara el módulo, aquí se definirán tanto archivos de listas desplegables como los propios del módulo
    'language' => array (
        0 => array (
            'from' => //Directorio origen
            '/SugarModules/language/application/en_us.lang.php',
            'to_module' => 'application', //Destino, se especifica la carpeta a donde se copiara el archivo, puede asignarse a application, y se guardara en la instancia principal, o se guardara en el modulo especificado.
            'language' => 'en_us', //Al idioma donde se agregaran los archivos, esto define cuando se utilizaran los archivos al momento de ejecución.
            ),
        ),
    //Se especifican los archivos que se tomaran para la configuración del modulo de administración, este es agregado cuando aparecera el módulo instalado como una entrada en administración. 
    'administration'=> array (
        array ( 
            'from'=>'/administration/mathadminoption.php',
            'to' => 'modules/Administration/facturacionadminoption.php', 
            ),
        ),
    // Declaracion de layouts, se agregan definiciones de relaciones
    'layoutdefs' => array (
        0 => array (
            'from' => '/SugarModules/relationships/layoutdefs/isies_math.php',
            'to_module' => 'isies_math',
            ),
        ),
    // Vardefs de las relaciones.
    'vardefs' => array (
        0 => array (
            'from' => '/SugarModules/relationships/vardefs/isies_math.php',
            'to_module' => 'isies_math',
        ),
    )
);

?>