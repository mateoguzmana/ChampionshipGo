<?php
require_once "connection.class.php";
    
    public $con;

    public class persons{
    
       public function __construct(){

        $this->con = $this->connection;    
  



       }

        public function login($email, $password){
        
            $query = $this->con->prepare("
            	SELECT id_person
                FROM persons
                WHERE email=':email' AND password = ':password'
            ");

	        $query->bindParam(':email',    $email);
	        $query->bindParam(':password', $password);

	        $query->execute();
         

        }   

    }

?>