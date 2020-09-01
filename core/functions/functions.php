<?php

    /*  Función para obtener de manera automática el servidor de conexión (para la etiqueta Base del head)  */
    function get_base_label(){

        $server_conexion = $_SERVER['HTTP_HOST'];

        if($server_conexion === 'localhost'){

            $baseURL = 'http://localhost/loginwithaccess';

        }else{

            /* Aquí se define la URL real del proyecto en producción (ej. http://www.loginwithaccess)  */
            $baseURL = '';
        }

        return $baseURL;

    }

    /*  Función para obtener el valor de la url  */  
    function get_url($url){

        $get_path = explode('/', $url);        

        return $get_path;

    }

    /*  Función para listar los archivos que están dentro de carpetas de un directorio  */
    function read_directory($directory){

        /*  Array para almacenar los valores de las carpetas  */
        $file_name = [];

        if(is_dir($directory)){

            if($open_folder = opendir($directory)){

                while(false !== ($file = readdir($open_folder))){

                    if(is_file($directory . $file)){

                        $file = explode('.', $file);
        
                        array_push($file_name, $file[0]);
        
                    }
        
                }

                closedir($open_folder);

            }

        }

        return $file_name;

    }