<!DOCTYPE html>
<html>
<head>
    <title>Championship Go</title>
    <link href="css/application.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>
</head>
<body>

  <?php 
    include "header.php";
    include "Modaldetalle.php";
 
   ?>
                        


<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
      <main id="content" class="content" role="main">
        <ol class="breadcrumb">
           <li>Crear nuevo torneo</li>
        </ol>
        <h1 class="page-title">Tabla de los torneos creados</h1>
    
  

        <div class="row">
            <div class="col-lg-12">
                <section class="widget">
                    <header>
                        <h5 class="fw-semi-bold">Mis torneos</h5>
                         
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <table class="table">
                            <thead>
                            <tr>
                                
                                <th>Foto</th>
                                <th>Nombre</th>
                                <th class="hidden-sm-down">Zona</th>
                                <th class="hidden-sm-down">Nº de equipos</th>
                                <th class="hidden-sm-down">Detalle</th>
                                <th class="hidden-sm-down">Actualizar</th>
                                <th class="hidden-sm-down">Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                             
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/1.jpg" alt="" height="50">
                                </td>
                                <td class="Championship">
                                    <span class="fw-semi-bold">Prado</span>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    <span class="fw-semi-bold">Prado</span>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    <span class="fw-semi-bold">10</span>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                  <i class="fa fa-eye btn btn-primary Ver" 
                                  data-toggle="modal" data-target="#Detalle"></i>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    <i class="fa fa-pencil btn btn-success"></i>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                   <i class="fa fa-times btn btn-danger"></i>
                                </td>
                            </tr>
                            <tr>
                                
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/2.jpg" alt="" height="50">
                                </td>
                                <td class="Championship">
                                    <span class="fw-semi-bold">Comunales</span>
                                </td>
                                <td class="hidden-sm-down">
                                   <span class="fw-semi-bold">Prado</span>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                     <span class="fw-semi-bold">12</span>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    <i class="fa fa-eye btn btn-primary Ver" 
                                    data-toggle="modal" data-target="#Detalle"></i>

                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    <i class="fa fa-pencil btn btn-success"></i>
                                </td>
                               
                                <td class="hidden-sm-down text-semi-muted">
                                   <i class="fa fa-times btn btn-danger"></i>
                                </td>

                            </tr>
                            <tr>
                              
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/3.jpg" alt="" height="50">
                                </td>
                                <td class="Championship">
                                  <span class="fw-semi-bold"> Corregimentales</span>
                                   
                                </td>
                                <td class="hidden-sm-down">
                                   <span class="fw-semi-bold">Medellín</span>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    <span class="fw-semi-bold">14</span>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    <i class="fa fa-eye btn btn-primary Ver" 
                                    data-toggle="modal" data-target="#Detalle"></i>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                   <i class="fa fa-pencil btn btn-success"></i>
                                </td>
                                 
                                <td class="hidden-sm-down text-semi-muted">
                                   <i class="fa fa-times btn btn-danger"></i>
                                </td>

                            </tr>

                            <tr>
                               
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/4.jpg" alt="" height="50">
                                </td>
                                <td class="Championship">
                                   <span class="fw-semi-bold">Regionales</span>
                                </td>
                                <td class="hidden-sm-down">
                                    <span class="fw-semi-bold">Poblado</span>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                   <span class="fw-semi-bold">16</span>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                     <i class="fa fa-eye btn btn-primary Ver" 
                                    data-toggle="modal" data-target="#Detalle"></i>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    <i class="fa fa-pencil btn btn-success"></i>
                                </td>

                                <td class="hidden-sm-down text-semi-muted">
                                   <i class="fa fa-times btn btn-danger"></i>
                                </td>

                            </tr>
                            <tr>
                               
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/11.jpg" alt="" height="50">
                                </td>
                                <td class="Championship">
                                  <span class="fw-semi-bold">Municipales</span>
                                </td>
                                <td class="hidden-sm-down">
                                  <span class="fw-semi-bold"> Envigado</span>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                   <span class="fw-semi-bold"> 12</span>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                     <i class="fa fa-eye btn btn-primary Ver" 
                                    data-toggle="modal" data-target="#Detalle"></i>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    <i class="fa fa-pencil btn btn-success"></i>
                                </td>

                                <td class="hidden-sm-down text-semi-muted">
                                   <i class="fa fa-times btn btn-danger"></i>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                        <div class="clearfix">
                            <div class="pull-xs-right">
                                <button class="btn btn-secondary btn-sm">
                                    Send to ...
                                </button>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-inverse dropdown-toggle" data-toggle="dropdown">
                                        &nbsp; Clear &nbsp;
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="#">Clear</a></li>
                                        <li><a class="dropdown-item" href="#">Move ...</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Basic table with styled content</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    
</div>
<!-- The Loader. Is shown when pjax happens -->
<div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin-fast"></i>
</div>

<!-- common libraries. required for every page-->

<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-pjax/jquery.pjax.js"></script>
<script src="vendor/tether/dist/js/tether.js"></script>
<script src="vendor/bootstrap/js/dist/util.js"></script>
<script src="vendor/bootstrap/js/dist/collapse.js"></script>
<script src="vendor/bootstrap/js/dist/dropdown.js"></script>
<script src="vendor/bootstrap/js/dist/button.js"></script>
<script src="vendor/bootstrap/js/dist/tooltip.js"></script>
<script src="vendor/bootstrap/js/dist/alert.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.js"></script>
<script src="vendor/widgster/widgster.js"></script>
<script src="vendor/pace.js/pace.js" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>
<script src="vendor/jquery-touchswipe/jquery.touchSwipe.js"></script>
<script src="js/bootstrap-fix/button.js"></script>

<!-- common app js -->
<script src="js/settings.js"></script>
<script src="js/app.js"></script>

<!-- page specific libs -->
<script src="js/bootstrap-fix/bootstrap.js"></script>
<script id="test" src="vendor/underscore/underscore.js"></script>
<script src="vendor/jquery.sparkline/index.js"></script>
<script src="vendor/jquery.sparkline/index.js"></script>
<script src="vendor/d3/d3.min.js"></script>
<script src="vendor/rickshaw/rickshaw.min.js"></script>
<script src="vendor/raphael/raphael-min.js"></script>
<script src="vendor/jQuery-Mapael/js/jquery.mapael.js"></script>
<script src="vendor/jQuery-Mapael/js/maps/usa_states.js"></script>
<script src="vendor/jQuery-Mapael/js/maps/world_countries.js"></script>
<script src="vendor/bootstrap/js/dist/popover.js"></script>
<script src="vendor/bootstrap_calendar/bootstrap_calendar/js/bootstrap_calendar.min.js"></script>
<script src="vendor/jquery-animateNumber/jquery.animateNumber.min.js"></script>

<!-- page specific js -->
<!--<script src="js/index.js"></script>-->
<script src="js/functions-index.js"></script>
</body>
</html>