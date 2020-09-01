<?php

    /*  Clase para manejar las rutas de la url de la página web  */
    class Router{

        /*  Definición de variable  */
        public $route;

        /*  Definición del constructor de la clase  */
        public function __construct($route){

            /*  Se recibe el valor que trae la url desde el index  */
            $this->route = $route;

            /*  Se aplica la función que revisa la url para extraer el parámetro 0 que es el define la ruta  */
            $this->route = get_url($this->route);

            /*  Array con los valores permitidos en la url. Vienen de la carpeta ./views/pages, por ello el nombre de los archivos deben ser igual a la ruta amigable que se usará.  */
            $white_pages_list = read_directory(VIEWS_DIR . 'pages/');
            $white_ajax_list = read_directory(VIEWS_DIR . 'main_content/');

            /*  Instancia de la clase que controla las vistas a cargar  */
            $view_page = new View_Controller();

            /*  Se verifica que el valor esté en el array de rutas permitidas  */
            if(in_array($this->route[0], $white_pages_list)){

                /*  Se asigna a la variable el valor permitido en el array  */
                $this->route = $this->route[0];

                /*  Se asigna la vista correspondiente al valor que viene en la url  */
                $view_page->show_view($this->route);

            }elseif(in_array($this->route[0], $white_ajax_list)){

                /*  Se asigna a la variable el valor permitido en el array  */
                $this->route = $this->route[0];

                /*  Se asigna la vista correspondiente al valor que viene en la url  */
                $view_page->show_html($this->route);

            }else{

                /*  Si la ruta no esta en el array de valores permitidos se asigna index por defecto  */
                $this->route = 'index';

                /*  Se asigna la vista correspondiente al valor que viene en la url  */
                $view_page->show_view($this->route);

            }

        }

    }