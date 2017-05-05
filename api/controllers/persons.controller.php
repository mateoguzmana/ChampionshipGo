<?php
require_once "../models/persons.class.php";

/* Método de tipo entero
para el login, se hace un switch para hacer cada caso.

*Registar el method será igual a 1.
*Actualizar el method será igual 2.
*Eliminar el method será igual a 3.
*Logueo será igual a 5.

*/

$persons = new persons();

$method = $_POST['method'];
$state = 1;

 switch ($method) {
   
    case 1:
       $persons->RegisterPersons(
	   $_POST['nit'],
	   $_POST['id_typedocument'],
	   $_POST['name'],
	   $_POST['lastname'],
	   $_POST['photo'],
	   $state,
	   $_POST['role'],
	   $_POST['email'],
	   $_POST['password']);

         if($persons){
     
             echo "Registró correctamente";
    
          }else{

             echo "Ocurrió un error";

           }

     break;

    case 2:
     	$persons->UpdatePersons(
     	$_POST['id_person'],
     	$_POST['nit'],
	    $_POST['id_typedocument'],
	    $_POST['name'],
	    $_POST['lastname'],
	    $_POST['photo'],
	    $state,
	    $_POST['role'],
	    $_POST['email'],
	    $_POST['password']
     	);
     	  if($persons){
     
             echo "Actualizó correctamente";
    
          }else{

             echo "Ocurrió un error";

           }
        break;

     case 3:
     	$persons->DeletePersons(
     	$_POST['id_person']	
     	);
     	break;

 	case  5:
 		$persons->login($_POST['email'], $_POST['password']);

 		if($persons == 1){
         
            return 1;
          
 		}else{

            return 0;

 		 }

       break;

 }

?>