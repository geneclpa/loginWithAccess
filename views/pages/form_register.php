<?php

    if(isset($_POST)){

        /*  Se verifica que el formulado fue enviado mediante el método POST  */
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            /*  Se recorre cada uno de los elementos del formulario y se hace la limpieza de los datos recibidos  */
            foreach($_POST as $field_name => $value){

                $$field_name = Main_Model::clean_chain(htmlspecialchars($value));
                
            }

        }else{

            $data_message = [
                'err' => true,
                'message' => 'Debe enviar el formulario de forma correcta',
                'url_res' => './register' 
            ];

        }

        /*  Se instancia la clase que trabaja con los usuarios de la página web  */
        $user_info = new User_Controller();

        /*  Se verifican si el usuario y el correo electrónico ya están registrados en la base de datos  */
        $user_data = [
            'user' => strtolower($user),
            'email' => strtolower($email)
        ];

        $user_result = $user_info->get($user_data);

        if(!empty($user_result)){

            $data_message = [
                'err' => true,
                'message' => 'El usuario y correo electrónico ingresado ya existe en la base de datos',
                'url_res' => './register' 
            ];

        }else{

            $user_data_info = [
                'name' => strtolower($name),
                'email' => strtolower($email),
                'user' => strtolower($user),
                'pass' => $pass__one
            ];

            $user_data = $user_info->set($user_data_info);

            if($user_data >= 1){

                /*  Si crean las variables de sesión  */
                $_SESSION['session_active'] = true;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['user'] = $user;

                $data_message = [
                    'err' => false,
                    'message' => 'El usuario ha sido agregado correctamente a la base de datos. Lo redigiremos a la zona de usuario',
                    'url_res' => './access' 
                ];
                
            }else{

                $data_message = [
                    'err' => true,
                    'message' => 'El usuario no ha sido agregado a la base de datos. Por favor, intente de nuevo',
                    'url_res' => './register' 
                ];

            }

        }

        header('Content-type: aplication/json');
        echo json_encode($data_message);
        exit;

    }