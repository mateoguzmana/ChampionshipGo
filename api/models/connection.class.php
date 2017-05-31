<?php

    class connection {

        

        public function getConnection(){

         $connection = new PDO("mysql:host=localhost;dbname=championshipgo;charset=utf8","root","");

          /* if($this->connection){

               echo "Conexión extablecida";

           }else{

                echo "No se estableció la conexión";
           }  */

           return $connection;
            
        }


    } 

  
    
    


?>