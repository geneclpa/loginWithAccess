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
                'url_res' => './login' 
            ];

        }

        /*  Se instancia la clase que trabaja con los usuarios de la página web  */
        $user_info = new User_Controller();

        /*  Se verifican si el usuario y el correo electrónico ya están registrados en la base de datos  */
        $user_data = [
            'user' => strtolower($user),
            'pass' => Main_Model::clean_chain($pass)
        ];

        $user_result = $user_info->validate_login($user_data);

        if(empty($user_result)){

            $data_message = [
                'err' => true,
                'message' => 'El usuario y contraseña no coinciden con los registros de la base de datos',
                'url_res' => './login' 
            ];

        }else{

            /*  Si crean las variables de sesión  */
            $_SESSION['session_active'] = true;
            
            foreach($user_result as $row){

                /*  Si crean las variables de sesión  */
                $_SESSION['name'] = $row['name_user'];
                $_SESSION['email'] = $row['email_user'];
                $_SESSION['user'] = $row['user_user'];

            }

            $data_message = [
                'err' => false,
                'message' => 'El usuario ha sido validado correctamente en la base de datos. Lo redigiremos a la zona de usuario',
                'url_res' => './access' 
            ];

        }

        header('Content-type: aplication/json');
        echo json_encode($data_message);
        exit;

    }