$(function () {

     /*this function get value of the inputs and the controller validate if exist the email and
       password on the database.
     */
    function Login(){
      
      $('#Login').click(function(){

        

        email    =  $('#Email').val();
        password =  $('#Password').val();
        
        var data = {"email":email, 
                    "password":password,

                    };

          $.post('../api/controllers/persons.controller.php', data, function(validar){

            alert(validar);

          }); 




        });

    }


    function pageLoad() {

        Login();
    }

   

    pageLoad();
    SingApp.onPageLoad(pageLoad);

});