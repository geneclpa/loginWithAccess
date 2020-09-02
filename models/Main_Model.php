<?php

    class Main_Model{

        /*  Definición de las variables de la clase  */
        private static $db_host = DB_HOST;
        private static $db_user = DB_USER;
        private static $db_pass = DB_PASS;
        private static $db_name = DB_NAME;
        private static $db_charset = 'utf8';
        private $conn;
        protected $query;
        protected $rows = array();

        /*  Definición de métodos de la clase  */
        /*  Método para abrir la conexión a la base de datos  */
        private function db_open() {

            $this->conn = new mysqli(
                self::$db_host,
                self::$db_user,
                self::$db_pass,
                self::$db_name
            );

            $this->conn->set_charset(self::$db_charset);

        }

        /*  Método para cerrar la conexión a la base de datos  */
        private function db_close() {

            $this->conn->close();

        }

        /*  Método para establecer datos en la base de datos  */
        protected function set_query() {

            $this->db_open();
            $this->conn->query($this->query);
            $result = mysqli_affected_rows($this->conn);
            $this->db_close();

            return $result;

        }

        /*  Métodos para obtener datos de la base de datos  */
        protected function get_query() {

            $this->db_open();

            $result = $this->conn->query($this->query);
            while( $this->rows[] = $result->fetch_assoc() );
            $result->close();

            $this->db_close();

            return array_pop($this->rows);

        }

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