<?php

     /* Nucleo principal de la página web  */

    /*  Se establece la zona horario y la especificación de caracteres  */
    /*  Se debe personalizar a la región en la cual te encuentres  */
    date_default_timezone_set('Europe/Madrid');
    setlocale(LC_ALL,'es_ES.UTF-8');

    /*  Definición de las constantes de los directorios de la página web  */
    const AJAX_DIR = './ajax/';
    const CONTROLLERS_DIR = './controllers/';
    const CORE_DIR = './core/';
    const MODELS_DIR = './models/';
    const PUBLIC_DIR = './public/';
    const VIEWS_DIR = './views/';

    /*  Definición de la identidad de la página web  */
    const NAME_APP = 'loginWithAccess';

    /*  Definición del servidor y los datos de conexión a la base de datos  */
    $serverConexion = $_SERVER['HTTP_HOST'];

     if($serverConexion === 'localhost'){
          
          /*  Datos de conexión en el servidor local de la página web  */
          define('DB_HOST', 'localhost');
          define('DB_USER', 'root');
          define('DB_PASS', '');
          define('DB_NAME', 'loginwithaccess_db');
          
     }else{
          
          /*  Datos de conexión en el servidor web de la página web ya en modo de producción  */
          /*  Deben ser definidos por el usuario con los datos reales  */
          define('DB_HOST', '');
          define('DB_USER', '');
          define('DB_PASS', '');
          define('DB_NAME', '');

     }