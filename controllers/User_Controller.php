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

        /*  Método para obtener información de los usuarios de la base de datos  */
        public function get($user_data = array()){

            return $this->user_info->get($user_data);
            
        }

        /*  Método para validar el acceso de los usuarios a la zona de usuarios  */
        public function validate_login($user_data = array()){

            return $this->user_info->validate_login($user_data);
            
        }

    }