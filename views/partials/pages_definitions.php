<?php

    /*  Carga de contenido dinámico de la página web  */
    switch ($page[0]) {
        case 'index':
            include_once VIEWS_DIR . 'main_content/index_content.php';
            break;

        case 'login':
            include_once VIEWS_DIR . 'main_content/login_content.php';
            break;

        case 'register':
            include_once VIEWS_DIR . 'main_content/register_content.php';
            break;
        
        default:
            include_once VIEWS_DIR . 'main_content/index_content.php';
            break;
    }