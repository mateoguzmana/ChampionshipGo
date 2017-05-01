<?php
require_once "../models/persons.class.php";

/* Método de tipo entero
para el login, se hace un shitch para hacer cada caso.

*Registar el method será igual a 1.
*Actualizar el method será igual 2.
*Eliminar el method será igual a 3.
*Logueo será igual a 5.

*/

$persons = new persons();

$method = $_POST['method'];

 switch ($method) {
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