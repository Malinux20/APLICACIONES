<?php
    class DBConnection{
        // Creamos un atributo que nos permita entrar a la base de datos
        private $Connection;
        // se define un contructor para conectar a la base de datos
        public function __construct(){
            // definimos constantes en el archivo de configuracion
            require_once("APP_RESTAURANTE/Config/config.php");
            // ahora creamos la coneccion de la base de datos con la clase MYSQL
            $this->Connection=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            // chacamos si la coneccion fue exitosa
            if($this->Connection->connect_error){
                die("Error al conectar a la base de datos : ".$this->Connection->connect_error);
            }
        }
        // Metodo para abrir la coneccion
        public function getConnection(){
            return $this->Connection;
        } 

        // Metodo para cerrar la coneccion
        public function closeConnection(){
            $this->Connection->close();
        }
    }
?>