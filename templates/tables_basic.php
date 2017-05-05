<!DOCTYPE html>
<html>
<head>
    <title>Sing - Tables Basic</title>
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
            <li class="active">Tables Basic</li>
        </ol>
        <h1 class="page-title">Tables - <span class="fw-semi-bold">Static</span></h1>
        <div class="row">
            <div class="col-lg-12">
                <section class="widget">
                    <header>
                        <h5>
                            Table <span class="fw-semi-bold">Styles</span>
                        </h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="hidden-sm-down">#</th>
                                <th>Picture</th>
                                <th>Description</th>
                                <th class="hidden-sm-down">Info</th>
                                <th class="hidden-sm-down">Date</th>
                                <th class="hidden-sm-down">Size</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="hidden-sm-down">1</td>
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/1.jpg" alt="" height="50">
                                </td>
                                <td>
                                    Palo Alto
                                </td>
                                <td class="hidden-sm-down">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-semi-muted">&nbsp; JPEG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-semi-muted">&nbsp; 200x150</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    September 14, 2012
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    45.6 KB
                                </td>
                                <td class="width-150">
                                    <div class="bg-gray-lighter progress-bar">
                                        <progress class="progress progress-sm progress-success js-progress-animate" value="100" max="100" style="width: 0%" data-width="29%"></progress>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-sm-down">2</td>
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/2.jpg" alt="" height="50">
                                </td>
                                <td>
                                    The Sky
                                </td>
                                <td class="hidden-sm-down">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-semi-muted">&nbsp; PSD</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-semi-muted">&nbsp; 2400x1455</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    November 14, 2012
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    15.3 MB
                                </td>
                                <td class="width-150">
                                    <div class="bg-gray-lighter progress-bar">
                                        <progress class="progress progress-sm progress-warning js-progress-animate" value="100" max="100" style="width: 0%" data-width="33%"></progress>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-sm-down">3</td>
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/3.jpg" alt="" height="50">
                                </td>
                                <td>
                                    Down the road
                                    <br>
                                    <span class="label label-danger">INFO!</span>
                                </td>
                                <td class="hidden-sm-down">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-semi-muted">&nbsp; JPEG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-semi-muted">&nbsp; 200x150</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    September 14, 2012
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    49.0 KB
                                </td>
                                <td class="width-150">
                                    <div class="bg-gray-lighter progress-bar">
                                        <progress class="progress progress-sm progress-bar-gray js-progress-animate" value="100" max="100" style="width: 0%" data-width="38%"></progress>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-sm-down">4</td>
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/4.jpg" alt="" height="50">
                                </td>
                                <td>
                                    The Edge
                                </td>
                                <td class="hidden-sm-down">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-semi-muted">&nbsp; PNG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-semi-muted">&nbsp; 210x160</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    September 15, 2012
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    69.1 KB
                                </td>
                                <td class="width-150">
                                    <div class="bg-gray-lighter progress-bar">
                                        <progress class="progress progress-sm progress-danger js-progress-animate" value="100" max="100" style="width: 0%" data-width="17%"></progress>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-sm-down">5</td>
                                <td>
                                    <img class="img-rounded" src="demo/img/pictures/11.jpg" alt="" height="50">
                                </td>
                                <td>
                                    Fortress
                                </td>
                                <td class="hidden-sm-down">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-semi-muted">&nbsp; JPEG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-semi-muted">&nbsp; 1452x1320</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    October 1, 2012
                                </td>
                                <td class="hidden-sm-down text-semi-muted">
                                    2.3 MB
                                </td>
                                <td class="width-150">
                                    <div class="bg-gray-lighter progress-bar">
                                        <progress class="progress progress-sm progress-primary js-progress-animate" value="100" max="100" style="width: 0%" data-width="41%"></progress>
                                    </div>
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
        <div class="row">
            <div class="col-lg-6">
                <section class="widget">
                    <header>
                        <h6>Table <span class="fw-semi-bold">Styles</span></h6>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3>Stripped <span class="fw-semi-bold">Table</span></h3>
                        <p>Each row is highlighted. You will never lost there. Just <code>.table-striped</code> it.</p>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox1" type="checkbox" data-check-all>
                                        <label for="checkbox1"></label>
                                    </div>
                                </th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Info</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2"></label>
                                    </div>
                                </td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td><span class="label label-danger">Online</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                                <td>Jacob <span class="label label-warning text-gray-dark">ALERT!</span></td>
                                <td>Thornton</td>
                                <td><span class="label bg-gray-light text-white">Away</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4"></label>
                                    </div>
                                </td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td><span class="label label-danger">Construct</span></td>
                            </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <h3>Hover <span class="fw-semi-bold">Table</span></h3>
                        <p>Trace only what's really important. <code>.table-hover</code> is made for it.</p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td><a href="#">ottoto@example.com</a></td>
                                    <td><span class="label label-pill bg-gray-lighter text-gray">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td><a href="#">fat.thor@example.com</a></td>
                                    <td><span class="label label-pill bg-gray-lighter text-gray-light">Unconfirmed</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td><a href="#">larry@example.com</a></td>
                                    <td><span class="label label-pill bg-gray-lighter text-gray">New</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Peter</td>
                                    <td>Horadnia</td>
                                    <td><a href="#">peter@example.com</a></td>
                                    <td><span class="label label-pill bg-gray-lighter text-gray-light">Active</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="widget">
                    <header>
                        <h6>Table <span class="fw-semi-bold">Styles</span></h6>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3>Bordered  <span class="fw-semi-bold">Table</span></h3>
                        <p>Each row is highlighted. You will never lost there. That's how
                            all of us learned in school the table should look like. Just add
                            <code>.table-bordered</code> to it.</p>
                        <table class="table table-bordered table-lg mt-lg mb-0">
                            <thead>
                            <tr>
                                <th>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox10" type="checkbox" data-check-all>
                                        <label for="checkbox10"></label>
                                    </div>
                                </th>
                                <th>Product</th>
                                <th class="text-xs-right">Price</th>
                                <th class="text-xs-center">Sales</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox11" type="checkbox" data-check-all>
                                        <label for="checkbox11"></label>
                                    </div>
                                </td>
                                <td>On the Road</td>
                                <td class="text-xs-right">$25 224.2</td>
                                <td class="text-xs-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#618fb0">13,14,16,15,4,14,20</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox12" type="checkbox" data-check-all>
                                        <label for="checkbox12"></label>
                                    </div>
                                </td>
                                <td>HP Core i7</td>
                                <td class="text-xs-right">$87 346.1</td>
                                <td class="text-xs-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#999">14,12,16,11,17,19,16</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox13" type="checkbox" data-check-all>
                                        <label for="checkbox13"></label>
                                    </div>
                                </td>
                                <td>Let's Dance</td>
                                <td class="text-xs-right">$57 944.6</td>
                                <td class="text-xs-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#f0b518">11,17,19,16,14,12,16</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox14" type="checkbox" data-check-all>
                                        <label for="checkbox14"></label>
                                    </div>
                                </td>
                                <td>Air Pro</td>
                                <td class="text-xs-right">$118 533.1</td>
                                <td class="text-xs-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#e5603b">13,14,20,16,15,4,14</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox15" type="checkbox" data-check-all>
                                        <label for="checkbox15"></label>
                                    </div>
                                </td>
                                <td>Version Control</td>
                                <td class="text-xs-right">$72 854.5</td>
                                <td class="text-xs-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#618fb0">16,15,4,14,13,14,20</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="widget">
                    <header>
                        <h6>Table <span class="fw-semi-bold">Styles</span></h6>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3>Overflow  <span class="fw-semi-bold">Table</span></h3>
                        <p>
                            Add any non-bordered .table within a widget for a seamless design.
                            Awesome look for no cost.
                            Just wrap the table with simple css class <code>.widget-table-overflow</code> inside
                            of widget
                        </p>
                    </div>
                    <div class="widget-table-overflow">
                        <table class="table table-striped table-lg mt-lg mb-0">
                            <thead class="no-bd">
                            <tr>
                                <th>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox210" type="checkbox" data-check-all>
                                        <label for="checkbox210"></label>
                                    </div>
                                </th>
                                <th>Product</th>
                                <th class="text-xs-right">Price</th>
                                <th class="text-xs-center">Sales</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox211" type="checkbox" data-check-all>
                                        <label for="checkbox211"></label>
                                    </div>
                                </td>
                                <td>On the Road</td>
                                <td class="text-xs-right">$25 224.2</td>
                                <td class="text-xs-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#618fb0">13,14,16,15,4,14,20</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox212" type="checkbox" data-check-all>
                                        <label for="checkbox212"></label>
                                    </div>
                                </td>
                                <td>HP Core i7</td>
                                <td class="text-xs-right">$87 346.1</td>
                                <td class="text-xs-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#999">14,12,16,11,17,19,16</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox213" type="checkbox" data-check-all>
                                        <label for="checkbox213"></label>
                                    </div>
                                </td>
                                <td>Let's Dance</td>
                                <td class="text-xs-right">$57 944.6</td>
                                <td class="text-xs-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#f0b518">11,17,19,16,14,12,16</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox214" type="checkbox" data-check-all>
                                        <label for="checkbox214"></label>
                                    </div>
                                </td>
                                <td>Air Pro</td>
                                <td class="text-xs-right">$118 533.1</td>
                                <td class="text-xs-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#e5603b">13,14,20,16,15,4,14</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox abc-checkbox">
                                        <input id="checkbox215" type="checkbox" data-check-all>
                                        <label for="checkbox215"></label>
                                    </div>
                                </td>
                                <td>Version Control</td>
                                <td class="text-xs-right">$72 854.5</td>
                                <td class="text-xs-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#618fb0">16,15,4,14,13,14,20</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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
<script src="vendor/jquery.sparkline/index.js"></script>
<!-- page specific js -->
<script src="js/tables-basic.js"></script>
</body>
</html>