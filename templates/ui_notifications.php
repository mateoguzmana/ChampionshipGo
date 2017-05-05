<!DOCTYPE html>
<html>
<head>
    <title>Sing - Notifications</title>
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
            <li class="active">UI Notifications</li>
        </ol>
        <h1 class="page-title">Messages - <span class="fw-semi-bold">Notifications</span></h1>
        <section class="widget">
            <header>
                <h6>
                    Messenger
                </h6>
                <div class="widget-controls">
                    <a title="Properties" href="#"><i class="glyphicon glyphicon-cog"></i></a>
                    <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                    <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                    <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <div class="row">
                    <div class="col-lg-4">
                        <h5 class="m-t-1">Layout options</h5>
                        <p>There are few position options available for notifications. You can click any of them
                            to change notifications position:</p>
                        <div class="location-selector">
                            <div class="bit top left" data-position="top left"></div>
                            <div class="bit top right" data-position="top right"></div>
                            <div class="bit top" data-position="top"></div>
                            <div class="bit bottom left" data-position="bottom left"></div>
                            <div class="bit bottom right" data-position="bottom right"></div>
                            <div class="bit bottom" data-position="bottom"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="m-t-1">Notification Types</h5>
                        <p>Different types of notifications for lost of use cases. Custom classes are also supported.</p>
                        <p><a class="btn btn-info" id="show-info-message" href="#">Info Message</a></p>
                        <p><a class="btn btn-danger" id="show-error-message" href="#">Error + Retry Message</a></p>
                        <p><a class="btn btn-success" id="show-success-message" href="#">Success Message</a></p>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="m-t-1">Dead Simple Usage</h5>
                        <p>Just few lines of code to instantiate a notifications object. Does not require passing any options:</p>
                        <pre><code>Messenger().post("Thanks for checking out Messenger!");</code></pre>
                        <p>More complex example:</p>
                                <pre><code>Messenger().post({
    message: 'There was an explosion while processing your request.',
    type: 'error',
    showCloseButton: true
});</code></pre>
                    </div>
                </div>
            </div>
        </section>
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
<script src="vendor/underscore/underscore-min.js"></script>
<script src="vendor/backbone/backbone.js"></script>
<script src="vendor/messenger/build/js/messenger.js"></script>
<script src="vendor/messenger/build/js/messenger-theme-flat.js"></script>
<script src="vendor/messenger/docs/welcome/javascripts/location-sel.js"></script>

<!-- page specific js -->
<script src="js/ui-notifications.js"></script>
</body>
</html>