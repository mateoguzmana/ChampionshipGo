$(function () {

    
    function index(){
          
          // Función para el modal.
        $('.Ver').click(function(){
          

        });

           /*      
              Función para crear un nuevo torneo.
              Esta función borra el cuerpo de la página y muestra 
              el formulario de registro

           */
        $(".Create").click(function Create(){
             
             $(".TitleDelete").remove();

             $(".Showform").html("");

             $(this).remove();

            $.get("Form_register_championship.php", function(form){
              
                $(".Showform").html(form);
                  index();
            });

        });




              /* Función para ver toda la información de torneo */
         $(".Championship").click(function Information(){

            $.get("championshipinfo.php", function(response){

                 $(".content-wrap").html(response);

                      /*     
                        Función para mirar los equipos de un torneo.  
                      */
                 $(".Showteams").click(function Teams(){
                       
                      $.get("table_teams.php", function(resp){
                      
                          $("#Table-teams").html(resp);

                          $(".hidde").click(function(){

                           $(this).parents("div").find("#Table-teams").html("");
                              
                              index();

                          });

                      });

                 });  // Aquí termina la función para ver equipos
             



                  /* Función para ver más información del torneo; tabla de posiciones,
                     Solicitudes de inscripción, tabla de goleadores, valla menos vencida.
                  */

               $(".MoreInfo").click(function InformationTeam(){
                
                   $.get("more_info_teams.php", function(Moreinfo){
                     
                       $("#Table-teams").html(Moreinfo);

                          $(".hidde").click(function(){

                           $(this).parents("div").find("#Table-teams").html("");
                              
                              index();

                          });


                         // Tabla de posiciones
                       $(".PositionTable").click(function(){
                         
                          $.get("position_table.php", function(tableposition){

                            $(".conteni").html(tableposition);

                          });

                       });


                       // Mostrar tabla de goleadores

                       $(".Gol").click(function(){

                         // table_goal_scorer
                            $.get("table_goal_scorer.php", function(gol){

                            $(".conteni").html(gol);

                          });


                       });

                       
                        // Valla menos vencida
                       $(".Fence").click(function(){

                          //table_fence
                           $.get("table_fence.php", function(fence){

                            $(".conteni").html(fence);

                          });


                       });



                   });
                    

               });



            });

         });  // Función ver torneo termina aquí


    }


    function pageLoad() {

        index();
    }

   

    pageLoad();
    SingApp.onPageLoad(pageLoad);  

});