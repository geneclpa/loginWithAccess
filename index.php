<?php

    /*  Archivo principal de la aplicación  */
    /*  En este archivo se manejan constantes y configuración global de la página web  */
    require_once './core/core_app.php';

    /*  Carga del controlador Autoload para la carga automática de controladores y modelos  */
    require_once CONTROLLERS_DIR . 'Autoload.php';

    /*  Se hace la instancia de la clase para cargar los controladores y modelos de la aplicación  */
    $autoload = new Autoload();

    /*  Archvo general de funciones php  */
    require_once CORE_DIR . 'functions/functions.php';

    /*  Se define la página web solicitada por la url y en caso que no esté definida se pasa el valor index(home)  */
    $page = (isset($_GET['page'])) ? Main_Model::clean_chain(htmlspecialchars($_GET['page'])) : 'index';

    /*  Se hace la instancia de clase que controla las rutas de la aplicación  */
    $login_with_access = new Router($page);