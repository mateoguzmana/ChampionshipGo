<!DOCTYPE html>
<html>
<head>
    <title>Sing - Profile</title>
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
            <li class="active">Profile</li>
        </ol>
        <h1 class="page-title">User - <span class="fw-semi-bold">Profile</span></h1>
        <div class="row">
            <div class="col-lg-6">
                <section class="widget user-profile">
                    <div class="widget-body">
                        <div class="widget-top-overflow text-white">
                            <div class="height-250 overflow-hidden">
                                <img class="img-fluid" src="demo/img/pictures/19.jpg">
                            </div>
                            <div class="btn-toolbar">
                                <a href="#" class="btn btn-outline btn-sm pull-xs-right">
                                    <i class="fa fa-twitter mr-xs"></i>
                                    Follow
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 text-xs-center">
                                <div class="post-user post-user-profile">
                                    <span class="thumb-xlg">
                                        <img class="img-circle" src="demo/img/people/a5.jpg" alt="...">
                                    </span>
                                    <h5 class="fw-normal">Adam <span class="fw-semi-bold">Johns</span></h5>
                                    <p>UI/UX designer</p>
                                    <a href="#" class="btn btn-danger btn-sm mt">
                                        &nbsp;Send
                                        <i class="fa fa-envelope ml-xs"></i>&nbsp;
                                    </a>
                                    <ul class="contacts">
                                        <li><i class="fa fa-phone fa-fw mr-xs"></i><a href="#"> +375 29 555-55-55</a></li>
                                        <li><i class="fa fa-envelope fa-fw mr-xs"></i><a href="#"> psmith@example.com</a></li>
                                        <li><i class="fa fa-map-marker fa-fw mr-xs"></i><a href="#"> Minsk, Belarus</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="stats-row stats-row-profile mt text-xs-right">
                                    <div class="stat-item">
                                        <p class="value text-xs-right">251</p>
                                        <h6 class="name">Posts</h6>
                                    </div>
                                    <div class="stat-item">
                                        <p class="value text-xs-right">9.38%</p>
                                        <h6 class="name">Conversion</h6>
                                    </div>
                                    <div class="stat-item">
                                        <p class="value text-xs-right">842</p>
                                        <h6 class="name">Followers</h6>
                                    </div>
                                </div>
                                <p class="text-xs-right mt-lg">
                                    <a href="#" class="label label-warning"> UI/UX </a>
                                    <a href="#" class="label label-danger ml-xs"> Web Design </a>
                                    <a href="#" class="label label-default ml-xs"> Mobile Apps </a>
                                </p>
                                <p class="lead mt-lg">
                                    My name is Adam Johns and here is my new Sing user profile page.
                                </p>
                                <p>
                                    I love reading people's summaries page especially those who are in the same industry as me.
                                    Sometimes it's much easier to find your concentration during the night.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="activities">
                    <h2 class="m-l-1">Activities</h2>
                    <section class="event">
                        <span class="thumb-sm avatar pull-xs-left mr-sm">
                            <img class="img-circle" src="demo/img/people/a5.jpg" alt="...">
                        </span>
                        <h5 class="event-heading"><a href="#">Bob Nilson</a> <small><a href="#">@nils</a></small></h5>
                        <p class="text-muted">February 22, 2014 at 01:59 PM</p>
                        <p>
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
                    <section class="event">
                        <h5 class="event-heading"><a href="#">Jessica Smith</a> <small>@jess</small></h5>
                        <p class="text-muted">February 22, 2014 at 01:59 PM</p>
                        <p>
                            Check out this awesome photo I made in Italy last summer. Seems it was lost somewhere deep inside
                            my brand new HDD 40TB. Thanks god I found it!
                        </p>
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
                                        <h6 class="author fw-semi-bold fs-sm">Ignacio Abad <small>6 mins ago</small></h6>
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
                    <form class="mt" action="#">
                        <div class="form-group mb-0">
                            <label class="sr-only" for="new-event">New event</label>
                            <textarea class="form-control" id="new-event" placeholder="Post something..." rows="3"></textarea>
                        </div>
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-gray">
                                    <i class="fa fa-camera fa-lg"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-gray">
                                    <i class="fa fa-map-marker fa-lg"></i>
                                </a>
                            </div>
                            <button type="submit" class="btn btn-danger btn-sm pull-xs-right">Post</button>
                        </div>
                    </form>
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