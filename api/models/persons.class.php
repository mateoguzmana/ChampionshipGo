<?php
require_once "connection.class.php";
    
     $con;

     class persons{

       public function __construct(){
         
        $connection = new connection();  
        $con = $connection;    
  
       }

        public function login($email, $password){
        
            $query = $this->$con->prepare("
            	SELECT id_person
                FROM persons
                WHERE email=:email AND password = :password
            ");

	        $query->bindParam(":email",    $email);
	        $query->bindParam(":password", $password);

	        $query->execute();

        }

        public function RegisterPersons($nit, $id_typedocument, $name, $lastname, $photo, 
            $state, $role, $password, $email){
          
            $sql = "INSERT INTO persons (nit, id_typedocument, name,lastname,photo, state, id_role, password, email)
               VALUES (:nit, :id_typedocument, :name, :lastname, :photo, :state, 
               :role, :password, :email)";

            $query = $this->$con->prepare($sql);
            
            $query->bindParam(":nit",$nit);
            $query->bindParam(":id_typedocument",$id_typedocument);
            $query->bindParam(":name",$name);
            $query->bindParam(":lastname",$lastname);
            $query->bindParam(":photo",$photo);
            $query->bindParam(":state",$state);
            $query->bindParam(":role",$role);
            $query->bindParam(":password",$password);
            $query->bindParam(":email",$email);   
            
            $query->execute();

            return $query;
               
        }

        public function UpdatePersons($id_person,$nit, $id_typedocument, $name, $lastname, $photo, 
            $state, $role, $password, $email){
          
            $sql = "UPDATE persons SET 
                (nit=:nit, 
                 id_typedocument=:id_typedocument,
                 name =:name , 
                 lastname=:lastname,
                 photo =:photo, 
                 state =:state, 
                 id_role = :role, 
                 password =:password,
                 email=::email WHERE id_person = :id_person 
                 )";

            $query = $this->$con->prepare($sql);
            $query->bindParam(":id_person",$id_person);
            $query->bindParam(":nit",$nit);
            $query->bindParam(":id_typedocument",$id_typedocument);
            $query->bindParam(":name",$name);
            $query->bindParam(":lastname",$lastname);
            $query->bindParam(":photo",$photo);
            $query->bindParam(":state",$state);
            $query->bindParam(":role",$role);
            $query->bindParam(":password",$password);
            $query->bindParam(":email",$email);   
            
            $query->execute();

            return $query;

        } 

        public function DeletePersons($id_person){
        
            $sql = "UPDATE persons SET state=:state WHERE id_person=:id_person";
            
            $query = $this->$con->prepare($sql);
            $query->bindParam(":state", 0);
            $query->bindParam("id_person", $id_person);

            $query->execute();

            return $query;

        }
 




    }

?>