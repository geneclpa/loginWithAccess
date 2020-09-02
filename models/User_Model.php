<?php

    class User_Model extends Main_Model{

        /*  Definición de los métodos de la clase  */
        public function set($user_data = array()){

            foreach($user_data as $key => $value){

                $$key = Main_Model::clean_chain($value);

                $this->query = "INSERT INTO user_db (name_user, email_user, user_user, pass_user) VALUES ('$name', '$email', '$user', '$pass');";

                $result = $this->set_query();

                return $result;

            }

        }

    }