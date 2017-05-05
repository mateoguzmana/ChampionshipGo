<!DOCTYPE html>
<html>
<head>
    <title>Sing - List Groups</title>
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
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id="content" class="content" role="main">
        <!-- jquery ui sortable chrome overflow-x fix. when set to hidden does not behaves as expected. resetting back
             just for this page.
             http://bugs.jqueryui.com/ticket/9588 -->
        <style>
            body{
                overflow-x: visible;
            }
        </style>
        <ol class="breadcrumb">
            <li>YOU ARE HERE</li>
            <li class="active">UI List Groups</li>
        </ol>
        <h1 class="page-title">Lists - <span class="fw-semi-bold">Sortable Groups</span></h1>
        <section class="widget">
            <header>
                <h5>
                    Grouped <span class="fw-semi-bold">Lists</span>
                </h5>
                <div class="widget-controls">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#"><i class="fa fa-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <h3>Closest <span class="fw-semi-bold">Stars</span></h3>
                <p>Try to play around with this list. Are you ready to pass an exam on astronomy? </p>
                <ul class="list-group list-group-sortable mt-lg" id="sortable">
                    <li class="list-group-item">
                        <i class="fa fa-sort"></i>
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        &nbsp;&nbsp;&nbsp; 03 &nbsp;&nbsp;&nbsp;
                        Barnard's Star
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-sort"></i>
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        &nbsp;&nbsp;&nbsp; 01 &nbsp;&nbsp;&nbsp;
                        The Sun
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-sort"></i>
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        &nbsp;&nbsp;&nbsp; 04 &nbsp;&nbsp;&nbsp;
                        Wolf 359
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-sort"></i>
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        &nbsp;&nbsp;&nbsp; 02 &nbsp;&nbsp;&nbsp;
                        Proxima Centauri
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-sort"></i>
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        &nbsp;&nbsp;&nbsp; 05 &nbsp;&nbsp;&nbsp;
                        Lalande 21185
                    </li>
                </ul>
            </div>
        </section>
        <section class="widget mt-lg">
            <header>
                <h5>
                    List <span class="fw-semi-bold">Groups</span>
                </h5>
                <div class="widget-controls">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#"><i class="fa fa-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <h3>Nestable <span class="fw-semi-bold">List</span></h3>
                <p>There is a scientific theory that you can arrange this list in such way that there will
                    be no more saddness
                in the whole world. Can you? Touch devices supported</p>
                <div class="row">
                    <div class="col-md-6 mt-lg">
                        <div class="dd" id="nestable1">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">Item 1</div>
                                </li>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle">Item 2</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="3"><div class="dd-handle">Item 3</div></li>
                                        <li class="dd-item" data-id="4"><div class="dd-handle">Item 4</div></li>
                                        <li class="dd-item" data-id="5">
                                            <div class="dd-handle">Item 5</div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="6"><div class="dd-handle">Item 6</div></li>
                                                <li class="dd-item" data-id="7"><div class="dd-handle">Item 7</div></li>
                                                <li class="dd-item" data-id="8"><div class="dd-handle">Item 8</div></li>
                                            </ol>
                                        </li>
                                        <li class="dd-item" data-id="9"><div class="dd-handle">Item 9</div></li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6 mt-lg">
                        <div class="dd" id="nestable2">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="13">
                                    <div class="dd-handle">Item 13</div>
                                </li>
                                <li class="dd-item" data-id="14">
                                    <div class="dd-handle">Item 14</div>
                                </li>
                                <li class="dd-item" data-id="15">
                                    <div class="dd-handle">Item 15</div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="16"><div class="dd-handle">Item 16</div></li>
                                        <li class="dd-item" data-id="17"><div class="dd-handle">Item 17</div></li>
                                        <li class="dd-item" data-id="18"><div class="dd-handle">Item 18</div></li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
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
<script src="vendor/jquery-ui/ui/core.js"></script>
<script src="vendor/jquery-ui/ui/widget.js"></script>
<script src="vendor/jquery-ui/ui/mouse.js"></script>
<script src="vendor/jquery-ui/ui/sortable.js"></script>
<script src="vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="vendor/jquery.nestable/jquery.nestable.js"></script>

<!-- page specific js -->
<script src="js/ui-list-groups.js"></script>
</body>
</html>