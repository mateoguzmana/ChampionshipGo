<!DOCTYPE html>
<html>
<head>
    <title>Sing - Gallery</title>
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
        <ol class="breadcrumb">
            <li>YOU ARE HERE</li>
            <li class="active">Gallery</li>
        </ol>
        <h1 class="page-title">Media - <span class="fw-semi-bold">Images</span></h1>
        <div class="clearfix mb-lg">
            <div class="btn-group m-b-20 js-filter-options">
                <span class="btn btn-secondary filter active" data-group="all">All</span>
                <span class="btn btn-secondary filter" data-group="nature">Nature</span>
                <span class="btn btn-secondary filter" data-group="people">People</span>
                <span class="btn btn-secondary filter" data-group="space">Space</span>
            </div>
            <div class="pull-xs-right m-b-20">
                <div class="btn-group js-sort-options">
                    <span class="btn btn-secondary sort active" data-sort-order="asc"><i class="fa fa-sort-numeric-asc"></i></span>
                    <span class="btn btn-secondary sort" data-sort-order="desc"><i class="fa fa-sort-numeric-desc"></i></span>
                </div>
            </div>
        </div>
        <div class="row gallery" id="grid">
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["nature"]' data-title="Mountains">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/13.jpg"><img class="figure-img" src="demo/img/pictures/1.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Mountains</h6>
                        <ul class="post-links">
                            <li><a href="#">10 mins</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart-o"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["people"]' data-title="Empire State Pigeon">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/2.jpg"><img class="figure-img" src="demo/img/pictures/2.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Empire State Pigeon</h6>
                        <ul class="post-links">
                            <li><a href="#">1 hour</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["nature"]' data-title="Big Lake">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/3.jpg"><img class="figure-img" src="demo/img/pictures/3.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Big Lake</h6>
                        <ul class="post-links">
                            <li><a href="#">2 mins</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["nature"]' data-title="Forest">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/4.jpg"><img class="figure-img" src="demo/img/pictures/4.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Forest</h6>
                        <ul class="post-links">
                            <li><a href="#">2 mins</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["people"]' data-title="Smile">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/5.jpg"><img class="figure-img" src="demo/img/pictures/5.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Smile</h6>
                        <ul class="post-links">
                            <li><a href="#">2 mins</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart-o"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["people"]' data-title="Smile">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/6.jpg"><img class="figure-img" src="demo/img/pictures/6.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Smile</h6>
                        <ul class="post-links">
                            <li><a href="#">1 hour</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["nature"]' data-title="Fog">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/8.jpg"><img class="figure-img" src="demo/img/pictures/8.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Fog</h6>
                        <ul class="post-links">
                            <li><a href="#">2 mins</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["people"]' data-title="Beach">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/9.jpg"><img class="figure-img" src="demo/img/pictures/9.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Beach</h6>
                        <ul class="post-links">
                            <li><a href="#">2 mins</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["people"]' data-title="Pause">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/10.jpg"><img class="figure-img" src="demo/img/pictures/10.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Pause</h6>
                        <ul class="post-links">
                            <li><a href="#">3 hour</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["space"]' data-title="Space">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/11.jpg"><img class="figure-img" src="demo/img/pictures/11.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Space</h6>
                        <ul class="post-links">
                            <li><a href="#">3 hour</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart-o"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["space"]' data-title="Shuttle">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/13.jpg"><img class="figure-img" src="demo/img/pictures/13.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Shuttle</h6>
                        <ul class="post-links">
                            <li><a href="#">35 mins</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 gallery-item" data-groups='["space"]' data-title="Sky">
                <figure class="figure img-thumbnail">
                    <a href="demo/img/pictures/14.jpg"><img class="figure-img" src="demo/img/pictures/14.jpg" alt="..."></a>
                    <figcaption class="figure-caption">
                        <h6 class="mt-0 mb-xs">Sky</h6>
                        <ul class="post-links">
                            <li><a href="#">2 mins</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart-o"></i> Like</span></a></li>
                            <li><a href="#">Details</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-3 js-shuffle-sizer"></div>
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
<script src="vendor/shufflejs/dist/jquery.shuffle.modernizr.min.js"></script>
<script src="vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<!-- page specific js -->
<script src="js/gallery.js"></script>
</body>
</html>