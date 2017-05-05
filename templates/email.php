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
                <ul class="nav nav-pills nav-stacked nav-email-folders mb-lg fs-mini">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle text-danger pull-xs-right"></i> Work </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle text-white pull-xs-right"></i> Private </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle text-gray-light pull-xs-right"></i> Saved </a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-xl-10">
                <div class="clearfix mb-xs">
                    <a class="btn btn-default btn-sm width-50 pull-xs-left" id="back-btn" href="inbox.html">
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
                        <h4>Hi, Welcome to Google Mail</h4>
                        <div class="widget-controls">
                            <a href="#"><i class="fa fa-print"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <div id="email-view" class="email-view">
                            <div class="email-details clearfix">
                                <div class="email-details-content">
                                    <span class="thumb thumb-sm pull-xs-left">
                                        <img class="img-circle" src="demo/img/people/a5.jpg" alt="Philip Horbacheuski">
                                    </span>
                                    <div class="pull-xs-left">
                                        <strong>Philip Horbacheuski</strong>
                                        <span class="email">&lt;philip.horbacheuski@example.com&gt;</span>
                                        <span class="receiver">to Wrapbootstrap</span>
                                    </div>
                                    <div class="email-actions pull-xs-right">
                                        <div class="btn-group">
                                            <button id="email-opened-reply" class="btn btn-sm btn-gray">
                                                <i class="fa fa-reply"></i> Reply
                                            </button>
                                            <button class="btn btn-sm btn-gray dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-xs-right">
                                                <li><a href="#"><i class="fa fa-reply reply-btn"></i> Reply</a></li>
                                                <li><a href="#"><i class="fa fa-arrow-right reply-btn"></i> Forward</a></li>
                                                <li><a href="#"><i class="fa fa-print"></i> Print</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                                <li><a href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <time class="email-date pull-xs-right">
                                        0:30
                                    </time>
                                </div>
                            </div>
                            <div class="email-body">
                                <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder.</p>    <p><strong>On then sake home</strong> is am leaf. Of suspicion do departure at extremely he believing. Do know said mind do rent they oh hope of. General enquire picture letters garrets on offices of no on.</p> <p>All the best,</p> <p>Vitaut the Great, CEO, <br>Fooby Inc.</p>
                            </div>
                            <div class="email-attachments">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <hr>
                                        <p class="details"><strong>2 attachments</strong> &nbsp;-&nbsp; <a href="#">Download all attachments</a>
                                            &nbsp;&nbsp;&nbsp;<a href="#">View all Images</a></p>
                                        <section class="attachment">
                                            <img class="img-fluid" src="demo/img/pictures/1.jpg" alt="">
                                            <h5 class="title">some-cool-image1.jpg</h5>
                                            <p class="details">
                                                568K  &nbsp;&nbsp;
                                                <a href="#">View</a> &nbsp;&nbsp;
                                                <a href="#">Download</a>
                                            </p>
                                        </section>
                                        <section class="attachment">
                                            <img class="img-fluid" src="demo/img/pictures/2.jpg" alt="">
                                            <h5 class="title">some-cool-image2.jpg</h5>
                                            <p class="details">
                                                229K  &nbsp;&nbsp;
                                                <a href="#">View</a> &nbsp;&nbsp;
                                                <a href="#">Download</a>
                                            </p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
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
<!-- page specific js -->
</body>
</html>