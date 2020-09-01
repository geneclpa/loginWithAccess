<?php

    /* Clase para cargar todos las clases de los controladores y módulos de la página web  */
    class Autoload{

        public function __construct(){

            spl_autoload_register(function ($file_name){

                $controllers_path = CONTROLLERS_DIR . $file_name . '.php';
                $models_path = MODELS_DIR . $file_name . '.php';

                if(file_exists($controllers_path)) require_once($controllers_path);

                if(file_exists($models_path)) require_once($models_path);

            });

        }

    }