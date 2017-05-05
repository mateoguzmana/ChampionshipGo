<!DOCTYPE html>
<html>
<head>
    <title>Sing - Form Validation</title>
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
<body>

   <?php 
     
     include "header.php";

    ?>





<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
    <main id="content" class="content" role="main">
        <ol class="breadcrumb">
            <li>YOU ARE HERE</li>
            <li class="active">Form Validation</li>
        </ol>
        <h1 class="page-title">Form - <span class="fw-semi-bold">Validation</span></h1>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-1">
                <section class="widget">
                    <header>
                        <h5>
                            Dead simple validation
                            <small>No JS needed to tune-up</small>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <form id="validation-form" class="form-horizontal form-label-left" method="post"
                              data-parsley-priority-enabled="false"
                              novalidate="novalidate">
                            <fieldset>
                                <legend>
                                    By default validation is started only after at least 3 characters have been input.
                                </legend>
                                    <div class="form-group row">
                                        <label class="control-label col-sm-3" for="basic">Simple required</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="basic" name="basic" class="form-control"
                                                   required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-sm-3" for="basic-change">
                                            Min-length On Change
                                    <span class="help-block">
                                        At least 10
                                    </span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="basic-change" name="basic-change" class="form-control"
                                                   data-parsley-trigger="change"
                                                   data-parsley-minlength="10"
                                                   required="required">
                                        </div>
                                    </div>
                            </fieldset>
                            <fieldset>
                                <legend>
                                    <span class="label label-warning  text-gray-dark mr-xs">
                                        HTML5
                                    </span>
                                    input types supported
                                </legend>
                                    <div class="form-group row">
                                        <label class="control-label col-sm-3" for="email">
                                            E-mail
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="email" id="email" name="email" class="form-control"
                                                   data-parsley-trigger="change"
                                                   data-parsley-validation-threshold="1"
                                                   required="required">
                                    <span class="help-block">
                                        This one is triggered even when 1 character has been input
                                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-sm-3" for="number">
                                            Number
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="number" name="number" class="form-control"
                                                   data-parsley-type="number"
                                                   required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-sm-3" for="range">
                                            Range
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text"  class="form-control"
                                                   id="range" name="range"
                                                   data-parsley-range="[10, 100]"
                                                   data-parsley-trigger="change"
                                                   data-parsley-validation-threshold="1"
                                                   required="required">
                                        </div>
                                    </div>
                            </fieldset>
                            <fieldset>
                                <legend>
                                    More validation
                                </legend>
                                    <div class="form-group row">
                                        <label class="control-label col-sm-3" for="password">
                                            Password helpers
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="password" id="password" name="password" class="form-control mb-sm"
                                                   data-parsley-trigger="change"
                                                   data-parsley-minlength="6"
                                                   required="required">
                                            <input type="password" id="password-r" name="password-r" class="form-control"
                                                   data-parsley-trigger="change"
                                                   data-parsley-minlength="6"
                                                   data-parsley-equalto="#password"
                                                   required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-sm-3" for="website">
                                            Website
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="website" name="website" class="form-control"
                                                   data-parsley-trigger="change"
                                                   data-parsley-type="url"
                                                   required="required">
                                        </div>
                                    </div>
                            </fieldset>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-danger btn-rounded pull-xs-right">Validate &amp; Submit</button>
                                <button type="button" class="btn btn-secondary btn-rounded">Cancel</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
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
<script src="vendor/pace.js/pace.js" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>
<script src="vendor/jquery-touchswipe/jquery.touchSwipe.js"></script>
<script src="js/bootstrap-fix/button.js"></script>

<!-- common app js -->
<script src="js/settings.js"></script>
<script src="js/app.js"></script>

<!-- page specific libs -->
<script src="vendor/parsleyjs/dist/parsley.min.js"></script>
<!-- page specific js -->
<script src="js/form-validation.js"></script>
</body>
</html>