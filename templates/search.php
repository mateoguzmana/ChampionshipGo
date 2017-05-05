<!DOCTYPE html>
<html>
<head>
    <title>Sing - Search Results</title>
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
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-xl-* > .widget.  -->
    <main id="content" class="content" role="main">
        <ol class="breadcrumb">
            <li>YOU ARE HERE</li>
            <li class="active">Search Results</li>
        </ol>
        <h1 class="page-title">Matching - <span class="fw-semi-bold">Results</span></h1>
        <div class="clearfix">
            <div class="btn-toolbar">
                <div class="btn-group">
                    <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-secondary">
                        Popular <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">All</a></li>
                        <li><a class="dropdown-item" href="#">Popular</a></li>
                        <li><a class="dropdown-item" href="#">Interesting</a></li>
                        <li><a class="dropdown-item" href="#">Latest</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-secondary">
                        All Time <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Last 24h</a></li>
                        <li><a class="dropdown-item" href="#">Last Month</a></li>
                        <li><a class="dropdown-item" href="#">Last Year</a></li>
                    </ul>
                </div>
                <div class="btn-group pull-xs-right">
                    <button class="btn btn-gray active" type="button"><i class="fa fa-th-list"></i></button>
                    <button class="btn btn-gray" type="button"><i class="fa fa-th-large"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-xl-push-9">
                <h5>Results <span class="fw-semi-bold">Filtering</span></h5>
                <p class="text-muted">Listed content is categorized by the following groups:</p>
                <ul class="nav nav-pills nav-stacked search-result-categories mt">
                    <li class="nav-item">
                        <a  class="nav-link" href="#">
                            Hot Ideas
                            <span class="label label-pill label-default pull-xs-right">34</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Latest Pictures
                            <span class="label label-pill label-default pull-xs-right">9</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Labels of Day
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Recent Movies
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Globals <span class="label label-pill label-default pull-xs-right">18</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-9 col-xl-pull-3">
                <p class="search-results-count">About 94 700 000 (0.39 sec.) results</p>
                <section class="search-result-item">
                    <a class="image-link" href="#">
                        <img class="image" src="demo/img/pictures/1.jpg">
                    </a>
                    <div class="search-result-item-body">
                        <div class="row">
                            <div class="col-md-9">
                                <h5 class="search-result-item-heading">
                                <a href="#">Next generation admin template</a>
                            </h5>
                                <p class="info">
                                    New York, NY 20188
                                </p>
                                <p class="description">
                                    Not just usual Metro. But something bigger. Not just usual widgets, but real
                                    widgets. Not just yet another admin template, but next generation admin template.
                                </p>
                            </div>
                            <div class="col-md-3 text-xs-center">
                                <p class="value4 mt-sm">
                                    $9, 700
                                </p>
                                <p class="text-muted">
                                    PER WEEK
                                </p>
                                <a class="btn btn-primary btn-info btn-sm" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="search-result-item">
                    <a class="image-link" href="#">
                        <img class="image" src="demo/img/pictures/5.jpg">
                    </a>
                    <div class="search-result-item-body">
                        <div class="row">
                            <div class="col-md-9">
                                <h5 class="search-result-item-heading">
                                    <a href="#">Try. Posted by Okendoken</a>
                                    <span class="label label-pill label-danger fw-normal pull-xs-right">Best Deal!</span>
                                </h5>
                                <p class="info">
                                    Los Angeles, NY 20188
                                </p>
                                <p class="description">
                                    You will never know exactly how something will go until you try it. You can
                                    think three hundred times and still have no precise result.
                                </p>
                            </div>
                            <div class="col-md-3 text-xs-center">
                                <p class="value4 mt-sm">
                                    $10, 300
                                </p>
                                <p class="text-muted">
                                    PER WEEK
                                </p>
                                <a class="btn btn-primary btn-info btn-sm" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="search-result-item">
                    <a class="image-link" href="#">
                        <img class="image" src="demo/img/pictures/13.jpg">
                    </a>
                    <div class="search-result-item-body">
                        <div class="row">
                            <div class="col-md-9">
                                <h5 class="search-result-item-heading">
                                    <a href="#">Vitaut the Great</a>
                                </h5>
                                <p class="info">
                                    New York, NY 20188
                                </p>
                                <p class="description">
                                    The Great Prince of the Grand Duchy of Lithuania he had stopped the invasion to
                                    Europe of Timur (Tamerlan) from Asia heading a big Army of Belarusians, Lithuanians.
                                </p>
                            </div>
                            <div class="col-md-3 text-xs-center">
                                <p class="value4 mt-sm">
                                    $3, 200
                                </p>
                                <p class="text-muted">
                                    PER WEEK
                                </p>
                                <a class="btn btn-info btn-sm" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="search-result-item">
                    <a class="image-link" href="#">
                        <img class="image" src="demo/img/pictures/3.jpg">
                    </a>
                    <div class="search-result-item-body">
                        <div class="row">
                            <div class="col-md-9">
                                <h5 class="search-result-item-heading">
                                    <a href="#">Can I use CSS3 Radial-Gradient?</a>
                                </h5>
                                <p class="info">
                                    Minsk, NY 20188
                                </p>
                                <p class="description">
                                    Yes you can! Further more, you should! It let's you create really beautiful images
                                    either for elements or for the entire background.
                                </p>
                            </div>
                            <div class="col-md-3 text-xs-center">
                                <p class="value4 mt-sm">
                                    $2, 400
                                </p>
                                <p class="text-muted">
                                    PER MONTH
                                </p>
                                <a class="btn btn-info btn-sm" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="text-xs-center">
                    <ul class="pagination pagination-sm">
                        <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
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