<?php

    session_start();
    session_destroy();

    /*  Si no esta definida la variable de sesión se coloca su valor en falso  */
    if(isset($_SESSION['session_active'])) $_SESSION['session_active'] = false;
    
    header('Location: ./');