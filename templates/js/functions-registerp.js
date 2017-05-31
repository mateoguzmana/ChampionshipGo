$(function () {

     /*this function get value of the inputs and the controller validate if exist the email and
       password on the database.
     */
        

    function registerPersons(){
      
         $('form').submit(function(e){
              e.preventDefault();
  
             var nit = $('#nit').val();
             var typedocument = $('#typedocument').children(':selected').attr('value');
             var name = $('#name').val();
             var lastname = $('#lastname').val();
             var photo = $('#photo').val();
             var role = $('#role').children(':selected').attr('value');
             var email = $('#email').val();
             var password = $('#password').val(); 


             var data = {
              "name" :name,
              "lastname" :lastname,
              "photo" :photo,
              "nit" :nit,
              "typedocument" :typedocument,
              "role" :role,
              "email" :email,
              "password" :password,
              "method": 1

             };

             $.post('../api/controllers/persons.controller.php', data, function(response){
                    
                    alert(response);

             });
    


         });

       

 


     }


    function pageLoad() {

      registerPersons();
      
    }

   

    pageLoad();
   



});