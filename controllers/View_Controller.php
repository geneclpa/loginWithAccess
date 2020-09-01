<?php

    /*  Clase que controla las vistas de la página web  */
    class View_Controller{

        /*  Definición de variables  */
        private static $folder_view = VIEWS_DIR;

        /*  Definición de métodos de la clase  */
        /*  Método para cargar las vistas de la página web  */
        public function show_view($view){

            require_once self::$folder_view . 'pages/' . $view . '.php';

        }

    }