$(function () {

     /*this function get value of the inputs and the controller validate if exist the email and
       password on the database.
     */
    function Login(){
      
       $('#Login').click(function(){

        email    =  $('#Email').val();
        password =  $('#Password').val();
          
        var data = {
        "email":email, 
        "password":password,
        "method": 5
        };

        $.post('../api/controllers/persons.controller.php', data, function(validar){


           if(validar == "true"){
                    
             window.location.href= "index.php";

           }
           else {

            $('#logfalse').addClass('alert alert-danger');
            $('#logtext').html("Contraseña o correo incorrecto");

           }



                
         }); 



 
       });

          $('#Register').click(function(){


               $('.titulo').html("Completa el formulario para el registro");

          });



     }


    function pageLoad() {

      Login();
      
    }

   

    pageLoad();
    SingApp.onPageLoad(pageLoad);

});