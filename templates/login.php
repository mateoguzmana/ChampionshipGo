<!DOCTYPE html>
<html>
<head>
    <title>Acceder</title>
    <link href="css/application.min.css" rel="stylesheet">
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
<body class="login-page">

<div class="container">
    <main id="content" class="widget-login-container" role="main">
        <div class="row">
            <div class="col-xl-4 col-md-6 col-xs-10 col-xl-offset-4 col-md-offset-3 col-xs-offset-1">
                <h5 class="widget-login-logo animated fadeInUp">
                    <i class="fa fa-circle text-gray"></i>
                    Entrar a la aplicación
                    <i class="fa fa-circle text-warning"></i>
                </h5>
                <section class="widget widget-login animated fadeInUp">
                    <header>
                         <center>
                             <img src="img/champions.png" height="150px">
                        </center>
                    </header>
                    <div class="widget-body">
                      
                        <form class="login-form mt-lg">
                            <div class="form-group">
                                <input type="text" class="form-control" id="Email" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="Password" type="password" placeholder="Contraseña">
                            </div>
                            <div class="clearfix">
                                <div class="btn-toolbar pull-xs-right">
                                    <a class="btn btn-primary btn-sm" id="Login">Acceder</a>
                                    <button type="button" class="btn btn-secondary btn-sm">Regitrarse</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer class="page-footer">
        2014 &copy; Sing. Admin Dashboard Template.
    </footer>
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
<script src="js/Login.js"></script>
<script src="js/app.js"></script>

<!-- page specific libs -->
<!-- page specific js -->
</body>
</html>