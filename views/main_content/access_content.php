<?php

    /*  Se verifica si hay o no una sesión para mostrar el contenido respectivo  */
    if($_SESSION['session_active']){

        /*  Contenido con autenticación  */

        echo '<h1>Acceso</h1>';


    }else{

        /*  Si no hay una sesión válida iniciada se redirige al usuario al home  */

        header('Location: ./');

    }
