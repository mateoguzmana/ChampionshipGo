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
	   $_POST['typedocument'],
	   $_POST['name'],
	   $_POST['lastname'],
	   $_POST['photo'],
	   $state,
	   $_POST['role'],
	   $_POST['password'],
	   $_POST['email']);

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
     	$persons->DeletePersons($_POST['id_person']);
     	break;

   	case  5:
 		  $consulta = $persons->login($_POST['email'], $_POST['password']);

      $n = 0;

      $role;
      $name;

      foreach ($consulta as $exist) {
             
      $n++;
      $role = $exist['id_role'];
      $name = $exist['name'];

      }

      if($n > 0){
        
       
       /*  $_SESSION['role'] = $role;
         $_SESSION['name'] = $name; */
         echo "true";

      }
      else {

        echo "false";

      }
       break;

 }// cierre del switch

?>