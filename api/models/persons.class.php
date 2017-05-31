<?php

require_once "connection.class.php";
  


     class persons{

        public function login($email, $password){
            
         $connection = new connection();  
         $con = $connection->getConnection();    
             $query = $con->prepare("
            	SELECT *FROM persons
                WHERE email=:email AND password = :password
            ");

	        $query->bindParam(":email",    $email);
	        $query->bindParam(":password", $password);

	        $query->execute();

            return $query;

    
        }


        public function RegisterPersons($nit, $id_typedocument, $name, $lastname, $photo, 
            $state, $role, $password, $email){

            $connection = new connection();  
            $con = $connection->getConnection(); 
            $sql = "INSERT INTO persons (nit, id_typedocument, 
            name,lastname,photo, state, id_role, password, email)
               VALUES (:nit, :id_typedocument, :name, :lastname, :photo, :state, 
               :role, :password, :email)";

            $query = $con->prepare($sql);
            
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

            if($query){
 
               echo "Registró correctamente";

            }
            else {

                echo "Ocurrió un error";
            }

       
        }

    
       public function UpdatePersons($id_person,$nit, $id_typedocument, $name, $lastname, $photo, 
            $state, $role, $password, $email){

            $connection = new connection();  
            $con = $connection->getConnection(); 
            $sql = "UPDATE persons SET 
                nit=:nit, 
                 id_typedocument=:id_typedocument,
                 name =:name, 
                 lastname=:lastname,
                 photo =:photo, 
                 state =:state, 
                 id_role = :role, 
                 password =:password,
                 email=:email WHERE id_person = :id_person 
                 ";

            $query = $con->prepare($sql);
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

            if($query){

                echo "Actualizó correctamente";
            }
            else {

                echo "No funcionó :c";
            }

        } 

        public function DeletePersons($id_person){
           
            $connection = new connection();  
            $con = $connection->getConnection(); 
            $sql = "UPDATE persons SET state=0 WHERE id_person=:id_person";
            
            $query = $con->prepare($sql);
            $query->bindParam("id_person", $id_person);

            $query->execute();
            
             if($query){

                echo "Eliminó correctamente";
            }
            else {

                echo "No funcionó :c";
            }

            
        }  
 

  }




?>