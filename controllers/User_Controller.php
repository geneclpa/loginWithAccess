<?php

    class User_Controller{

        /*  Definición de la variable  */
        private $user_info;

        /*  Definición del constructor de la clase  */
        public function __construct(){

            $this->user_info = new User_Model();

        }

        /*  Definición de los métodos de la clase  */
        /*  Método para ingresar usuarios en la base de datos  */
        public function set($user_data = array()){

            return $this->user_info->set($user_data);

        }

    }