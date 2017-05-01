<?php

    class connection {

    	public $connection;

        public function __construct(){

           $this->connection = new PDO("mysql:host=localhost;dbname=datos;charset=utf8","root","");

           if($this->connection){

               echo "Conexión extablecida";

           }else{

                echo "No se estableció la conexión";
           }

           return $this->connection;
            
        }


    } 

    $conexion = new connection();
    
    


?>