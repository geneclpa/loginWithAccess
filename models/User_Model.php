<?php

    class User_Model extends Main_Model{

        /*  Definición de los métodos de la clase  */
        public function set($user_data = array()){

            foreach($user_data as $key => $value){

                $$key = Main_Model::clean_chain($value);

            }

            $this->query = "INSERT INTO user_db (name_user, email_user, user_user, pass_user) VALUES ('$name', '$email', '$user', '$pass');";

            $result = $this->set_query();

            return $result;

        }

        /*  Método para obtener información de los usuarios de la base de datos  */
        public function get($user_data = array()){

            foreach($user_data as $key => $value){

                $$key = Main_Model::clean_chain($value);

            }

            $this->query = "SELECT * FROM user_db WHERE user_user = '$user' && email_user = '$email';";

            $this->get_query();

            $data_info = array();

            foreach($this->rows as $key => $value){

                array_push($data_info, $value);

            }

            return $data_info;
            
        }

    }