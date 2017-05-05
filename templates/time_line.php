<!DOCTYPE html>
<html>
<head>
    <title>Sing - Time Line</title>
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
            <li class="active">Time Line</li>
        </ol>
        <h1 class="page-title">Events - <span class="fw-semi-bold">Feed</span></h1>
        <ul class="timeline">
            <li class="on-left">
                <time class="event-time" datetime="2014-05-19 03:04">
                    <span class="date">yesterday</span>
                    <span class="time">8:03 <span class="fw-semi-bold">pm</span></span>
                </time>
                <span class="event-icon event-icon-success">
                    <i class="glyphicon glyphicon-map-marker"></i>
                </span>
                <section class="event">
                    <span class="thumb-sm avatar pull-xs-left mr-sm">
                        <img class="img-circle" src="demo/img/people/a2.jpg" alt="...">
                    </span>
                    <h5 class="event-heading"><a href="#">Jessica Nilson</a> <small>@jess</small></h5>
                    <p class="text-muted fs-sm">10:12 am - Publicly near Minsk</p>
                    <div class="event-map" id="gmap"></div>
                    <footer>
                        <ul class="post-links">
                            <li><a href="#">1 hour</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Comment</a></li>
                        </ul>
                        <ul class="post-comments">
                            <li>
                                <span class="thumb-xs avatar pull-xs-left mr-sm">
                                    <img class="img-circle" src="demo/img/people/a2.jpg" alt="...">
                                </span>
                                <div class="comment-body">
                                    <h6 class="author fs-sm fw-semi-bold">Radrigo Gonzales <small>7 mins ago</small></h6>
                                    <p>Someone said they were the best people out there just few years ago. Don't know
                                        better options.</p>
                                </div>
                            </li>
                            <li>
                                <span class="thumb-xs avatar pull-xs-left mr-sm">
                                    <img class="img-circle" src="demo/img/people/a4.jpg" alt="...">
                                </span>
                                <div class="comment-body">
                                    <h6 class="author fs-sm fw-semi-bold">Ignacio Abad <small>6 mins ago</small></h6>
                                    <p>True. Heard absolutely the same.</p>
                                </div>
                            </li>
                            <li>
                                <span class="thumb-xs avatar pull-xs-left mr-sm">
                                    <img class="img-circle" src="img/avatar.png" alt="...">
                                </span>
                                <div class="comment-body">
                                    <input class="form-control form-control-sm" type="text" placeholder="Write your comment...">
                                </div>
                            </li>
                        </ul>
                    </footer>
                </section>
            </li>
            <li>
                <time class="event-time" datetime="2014-05-19 03:04">
                    <span class="date">today</span>
                    <span class="time">9:41 <span class="fw-semi-bold">am</span></span>
                </time>
                <span class="event-icon event-icon-primary">
                    <i class="glyphicon glyphicon-comments"></i>
                </span>
                <section class="event">
                    <span class="thumb-sm avatar pull-xs-left mr-sm">
                        <img class="img-circle" src="demo/img/people/a5.jpg" alt="...">
                    </span>
                    <h5 class="event-heading"><a href="#">Bob Nilson</a> <small><a href="#">@nils</a></small></h5>
                    <p class="text-muted fs-sm">February 22, 2014 at 01:59 PM</p>
                    <p class="fs-mini">
                        There is no such thing as maturity. There is instead an ever-evolving process of maturing.
                        Because when there is a maturity, there is ...
                    </p>
                    <footer>
                        <ul class="post-links">
                            <li><a href="#">1 hour</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Comment</a></li>
                        </ul>
                    </footer>
                </section>
            </li>
            <li class="on-left">
                <time class="event-time" datetime="2014-05-19 03:04">
                    <span class="date">yesterday</span>
                    <span class="time">9:03 <span class="fw-semi-bold">am</span></span>
                </time>
                <span class="event-icon event-icon-danger">
                    <i class="glyphicon glyphicon-cutlery"></i>
                </span>
                <section class="event">
                    <h5 class="event-heading"><a href="#">Jessica Smith</a> <small>@jess</small></h5>
                    <p class="text-muted fs-sm">February 22, 2014 at 01:59 PM</p>
                    <p class="fs-mini">
                        Check out this awesome photo I made in Italy last summer. Seems it was lost somewhere deep inside
                        my brand new HDD 40TB. Thanks god I found it!
                    </p>
                    <div class="event-image">
                        <a href="demo/img/pictures/8.jpg">
                            <img src="demo/img/pictures/8.jpg">
                        </a>
                    </div>
                    <footer>
                        <div class="clearfix">
                            <ul class="post-links mt-sm pull-xs-left">
                                <li><a href="#">1 hour</a></li>
                                <li><a href="#"><span class="text-danger"><i class="fa fa-heart-o"></i> Like</span></a></li>
                                <li><a href="#">Comment</a></li>
                            </ul>

                            <span class="thumb thumb-sm pull-xs-right">
                                <a href="#">
                                    <img class="img-circle" src="demo/img/people/a1.jpg">
                                </a>
                            </span>
                            <span class="thumb thumb-sm pull-xs-right">
                                <a href="#"><img class="img-circle" src="demo/img/people/a5.jpg"></a>
                            </span>
                            <span class="thumb thumb-sm pull-xs-right">
                                <a href="#"><img class="img-circle" src="demo/img/people/a3.jpg"></a>
                            </span>
                        </div>
                        <ul class="post-comments mt-sm">
                            <li>
                                <span class="thumb-xs avatar pull-xs-left mr-sm">
                                    <img class="img-circle" src="demo/img/people/a1.jpg" alt="...">
                                </span>
                                <div class="comment-body">
                                    <h6 class="author fs-sm fw-semi-bold">Ignacio Abad <small>6 mins ago</small></h6>
                                    <p>Hey, have you heard anything about that?</p>
                                </div>
                            </li>
                            <li>
                                <span class="thumb-xs avatar pull-xs-left mr-sm">
                                    <img class="img-circle" src="img/avatar.png" alt="...">
                                </span>
                                <div class="comment-body">
                                    <input class="form-control form-control-sm" type="text" placeholder="Write your comment...">
                                </div>
                            </li>
                        </ul>
                    </footer>
                </section>
            </li>
            <li>
                <time class="event-time" datetime="2014-05-19 03:04">
                    <span class="date">yesterday</span>
                    <span class="time">9:03 <span class="fw-semi-bold">am</span></span>
                </time>
                <span class="event-icon">
                    <img class="img-circle" src="img/avatar.png">
                </span>
                <section class="event">
                    <span class="thumb-sm avatar pull-xs-left mr-sm">
                        <img class="img-circle" src="demo/img/people/a6.jpg" alt="...">
                    </span>
                    <h5 class="event-heading"><a href="#">Jessica Smith</a> <small>@jess</small></h5>
                    <p class="text-muted fs-sm">9:03 am - Publicly near Minsk</p>
                    <h5>New <span class="fw-semi-bold">Project</span> Launch</h5>
                    <p class="fs-mini">
                        Let's try something different this time. Hey, do you wanna join us tonight?
                        We're planning to a launch a new project soon. Want to discuss with all of you...
                    </p>
                    <a class="mt-n-xs text-muted fs-mini" href="#">Read more...</a>
                    <footer>
                        <ul class="post-links">
                            <li><a href="#">1 hour</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart-o"></i> Like</span></a></li>
                            <li><a href="#">Comment</a></li>
                        </ul>
                    </footer>
                </section>
            </li>
        </ul>
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
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="vendor/gmaps/gmaps.js"></script>
<script src="vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<!-- page specific js -->

<script src="js/timeline.js"></script>
</body>
</html>