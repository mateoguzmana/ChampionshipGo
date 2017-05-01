<?php

    class connection {

    	public $connection;

        public function __construct(){

           $this->connection = new PDO("mysql:host=localhost;dbname=championshipgo;charset=utf8","root","");
           
           return $this->connection;
            
        }

    } 

?>