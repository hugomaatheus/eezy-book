<?php

    class Connection {

        private static $connection;
        
        public static function getConnection() {              
            self::$connection = new PDO('mysql:host=127.0.0.1;dbname=eezy-book', 'root', '123');
            return self::$connection;            
        }

        public static function setConnection($connection) {
            self::$connection = $connection;
        }

    }

?>