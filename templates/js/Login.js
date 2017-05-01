$(function () {

    function Login(){
      
      $('#Login').click(function(){

        email    =  $('#Email').val();
        password =  $('#Password').val();
        
         var data = {"email":email, "password":password, "method":post};

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