<?php

    /*  Archvivo con el head de la página web  */

    /*  Definición de la base url. Llamado a la función definida en el core  */
    $base_url = get_base_label();

?>

<!DOCTYPE html>
<html lang="es">

    <head>

        <base href="<?php echo $base_url; ?>" target="_self" />
        <meta charset="utf-8" />
        <?php /*  Estos nos indica como será presentado el texto por pantalla */  ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
        <meta name="description" content="Desarrollo de un sencillo login" />
        <meta name="keywords" content="login, acceso a zona de usuario" />
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, minimum-scale=1.0, maximum-scale=2.0" />
        
        <title>Login de acceso a una zona de usuarios</title>

        <link rel="author" type="text/plain" href="humans.txt" />

        <?php /*  Definición de estilos css  */  ?>
        <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR; ?>css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR; ?>css/generals_styles.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR; ?>css/styles.css" />

        <?php /*  Definición de scripts  */ ?>
        <script src="https://kit.fontawesome.com/abee3377bc.js" crossorigin="anonymous"></script>
        <script src="<?php echo PUBLIC_DIR; ?>js/main_script.js"></script>

    </head>

    <body>