<!DOCTYPE html>
<html>
<head>
    <title>Sing - Email</title>
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
            <li class="active">Email</li>
        </ol>
        <h1 class="page-title">Email - <span class="fw-semi-bold">Inbox</span></h1>
        <div class="row">
            <div class="col-lg-3 col-xl-2">
                <a class="btn btn-danger btn-block" href="inbox.html">
                    Compose
                </a>
                <ul class="nav nav-pills nav-stacked nav-email-folders mt">
                    <li class="nav-item active">
                        <a class="nav-link" href="inbox.html">
                            <span class="label label-pill label-default pull-xs-right">2</span>
                            Inbox
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Starred</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sent Mail</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="label label-pill label-danger pull-xs-right">3</span>
                            Draft
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Trash</a></li>
                </ul>
                <h5 class="mt">QUICK VIEW</h5>
                <ul class="nav nav-pills nav-stacked nav-email-folders mb-lg">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle text-danger pull-xs-right"></i> Work </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle text-white pull-xs-right"></i> Private </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle text-gray-light pull-xs-right"></i> Saved </a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-xl-10">
                <div class="clearfix mb-xs">
                    <a class="btn btn-secondary btn-sm width-50 pull-xs-left" id="back-btn" href="inbox.html">
                        <i class="fa fa-angle-left fa-lg"></i>
                    </a>
                    <div class="pull-xs-right hide" id="folder-stats">
                        <p class="widget-email-count">Showing 1 - 10 of 96 messages</p>
                        <ul class="pagination pagination-sm widget-email-pagination">
                            <li class="prev disabled"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="next"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <section class="widget widget-email">
                    <header>
                        <h4>Compose <span class="fw-semi-bold">New</span></h4>
                    </header>
                    <div class="widget-body">
                        <form id="email-compose" class="form-email-compose" method="get" action="inbox.html">
                            <div class="form-group">
                                <input type="email" id="input-to" placeholder="To" class="input-transparent form-control" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" id="input-subject" placeholder="Subject" class="input-transparent form-control" value="">
                            </div>
                            <div class="form-group">
                                <textarea rows="10" class="form-control" id="wysiwyg" placeholder="Message"></textarea>
                            </div>
                            <div class="clearfix">
                                <div class="btn-toolbar pull-xs-right">
                                    <button type="reset" id="compose-discard-button" class="btn btn-gray">Discard</button>
                                    <button type="button" id="compose-save-button" class="btn btn-gray">&nbsp;&nbsp;Save&nbsp;&nbsp;</button>
                                    <button type="submit" id="compose-send-button" class="btn btn-danger">&nbsp;&nbsp;&nbsp;Send&nbsp;&nbsp;&nbsp;</button>
                                </div>
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
<script src="vendor/bootstrap3-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
<script src="vendor/bootstrap3-wysihtml5/src/bootstrap3-wysihtml5.js"></script>
<!-- page specific js -->
<script src="js/compose.js"></script>
</body>
</html>