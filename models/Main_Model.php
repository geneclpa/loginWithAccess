<?php

    class Main_Model{

        /*  Definición de métodos de la clase  */
        /*  Método para limpiar cadenas  */
        public static function clean_chain($chain){

            $chain = trim($chain);
            $chain = stripslashes($chain);
            $chain = str_ireplace('<script>', "", $chain);
            $chain = str_ireplace('</script>', "", $chain);
            $chain = str_ireplace('<script src', "", $chain);
            $chain = str_ireplace('<script type=', "", $chain);
            $chain = str_ireplace('SELECT * FROM', "", $chain);
            $chain = str_ireplace('DELETE FROM', "", $chain);
            $chain = str_ireplace('INSERT INTO', "", $chain);
            $chain = str_ireplace('DROP TABLE', "", $chain);
            $chain = str_ireplace('DROP DATABASE', "", $chain);
            $chain = str_ireplace('TRUNCATE TABLE', "", $chain);
            $chain = str_ireplace('SHOW TABLES', "", $chain);
            $chain = str_ireplace('SHOW DATABASES', "", $chain);
            $chain = str_ireplace('<?php', "", $chain);
            $chain = str_ireplace('?>', "", $chain);
            $chain = str_ireplace('--', "", $chain);
            $chain = str_ireplace('>', "", $chain);
            $chain = str_ireplace('<', "", $chain);
            $chain = str_ireplace('[', "", $chain);
            $chain = str_ireplace(']', "", $chain);
            $chain = str_ireplace('^', "", $chain);
            $chain = str_ireplace('==', "", $chain);
            $chain = str_ireplace(';', "", $chain);
            $chain = str_ireplace('::', "", $chain);
            $chain = stripslashes($chain);
            $chain = trim($chain);

            return $chain;

        }

    }