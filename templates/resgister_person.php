<!DOCTYPE html>
<html>
<head>
    <title>Registar usuario</title>
    <link href="css/application.min.css" rel="stylesheet">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
<body class="">

<div class="container">
   <form class="form-horizontal form-persons" role="form">
     
            <h3 style="text-align: center;">¡Haz parte de ChampionshipGo! </h3><br><br>

            <div class="form-group row">
                <label for="normal-field" class="col-md-4 form-control-label text-md-right">Nombre</label>
                <div class="col-md-7">
                    <input type="text" id="name" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="hint-field" class="col-md-4 control-label text-md-right">
                    Apellidos
        
                </label>
                <div class="col-md-7">
                    <input type="text" id="lastname" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 control-label text-md-right" for="tooltip-enabled">Foto</label>
                <div class="col-md-7">
                    <input type="file" id="photo" class="form-control"
                           data-placement="top" data-original-title="Some explanation text here"
                           placeholder="Hover over me..">
                </div>
            </div>
             <div class="form-group row">
                <label for="hint-field" class="col-md-4 control-label text-md-right">
                    Documento de identificación
        
                </label>
                <div class="col-md-7">
                    <input type="text" id="nit" class="form-control">
                </div>
            </div>
              <div class="form-group row">
                <label for="hint-field" class="col-md-4 control-label text-md-right">
                   Tipo de documento
        
                </label>
                <div class="col-md-7">
                     <select name="" id="typedocument" class="form-control">
                         
                         <option>Seleccione tipo documento</option>
                         <option value="1">Tarjeta de identidad</option>
                         <option value="2">Cédula de ciudadania</option>
                     </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="hint-field" class="col-md-4 control-label text-md-right">
                   Seleccione cómo se quiere desempeñar
        
                </label>
                <div class="col-md-7">
                     <select name="" id="role" class="form-control">
                         
                         <option>Seleccione desempeño</option>
                         <option value="1">Jugador</option>
                         <option value="2">Técnico</option>
                     </select>
                </div>
            </div>
           
           
           
            <div class="form-group row">
                 <label class="col-md-4 control-label text-md-right" for="password-field">Correo electrónico</label>
                <div class="col-md-7">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input id="email" class="form-control"  type="text" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 control-label text-md-right" for="password-field">Contraseña</label>
                <div class="col-md-7">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" id="password" placeholder="">
                    </div>
                </div>
            </div>
           
           
    
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-4 col-md-7">
                    <button type="submit" class="btn btn-primary register-person">Registrar</button>
                    <button type="button" class="btn btn-inverse">Cancel</button>
                </div>
            </div>
        </div>

        </form>
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
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/widgster/widgster.js"></script>

<!-- common app js -->
<script src="js/settings.js"></script>
<script src="js/functions-registerp.js"></script>
<script src="js/app.js"></script>

<!-- page specific libs -->
<!-- page specific js -->
</body>
</html>