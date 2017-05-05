<!DOCTYPE html>
<html>
<head>
    <title>Sing - Calendar</title>
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
            <li class="active">Calendar</li>
        </ol>
        <div class="row">
            <div class="col-xl-4">
                <h1 class="page-title" id="calender-current-date">Calendar - <span class="fw-semi-bold">Events</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-xl-4">
                <h5>Draggable <span class="fw-semi-bold">Events</span></h5>
                <p>Just drap and drop events from there directly into the calendar.</p>
                <div class="calendar-external-events mb-lg" id='external-events'>
                    <div class='external-event bg-gray text-white' data-event-class="bg-gray text-white">Buy this template</div>
                    <div class='external-event bg-primary text-white' data-event-class="bg-primary text-white">Study some Node</div>
                    <div class='external-event bg-info text-white' data-event-class="bg-info text-white">Make a tea</div>
                    <div class='external-event bg-success text-white' data-event-class="bg-success text-white">Go to school</div>
                    <div class='external-event bg-warning text-white' data-event-class="bg-warning text-white">Open windows</div>
                </div>
            </div>
            <div class="col-lg-9 col-xl-8">
                <section class="widget widget-calendar">
                    <div class="widget-body">
                        <div class="calendar-controls">
                            <div class="btn-group ">
                                <button class="btn btn-secondary" id="calender-prev"><i class="fa fa-angle-left"></i></button>
                                <button class="btn btn-secondary" id="calender-next"><i class="fa fa-angle-right"></i></button>
                            </div>
                            <div id="calendar-switcher" class="btn-group pull-xs-right" data-toggle="buttons">
                                <label class="btn btn-secondary active">
                                    <input type="radio" name="view" value="month"> Month
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="view" value="agendaWeek"> Week
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="view" value="agendaDay"> Day
                                </label>
                            </div>
                        </div>
                        <div id="calendar" class="calendar"></div>
                    </div>
                </section>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header no-border">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h6 class="modal-title fw-bold mt" id="myModalLabel17">Edit Event</h6>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer no-border">
                                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header no-border">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h6 class="modal-title fw-bold mt" id="myModalLabel18">New Event</h6>
                                <p class="text-muted mt-sm">
                                    Just enter event name to create a new one
                                </p>
                            </div>
                            <div class="modal-body bg-gray-lighter">
                                <div class="form-group">
                                    <input type="text" id="event-name" class="form-control input-no-border"
                                           placeholder="Name">
                                </div>
                            </div>
                            <div class="modal-footer no-border">
                                <button data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                <button data-dismiss="modal" id="create-event" class="btn btn-success">OK</button>
                            </div>
                        </div>
                    </div>
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
<script src="vendor/jquery-ui/ui/core.js"></script>
<script src="vendor/jquery-ui/ui/widget.js"></script>
<script src="vendor/jquery-ui/ui/mouse.js"></script>
<script src="vendor/jquery-ui/ui/draggable.js"></script>
<script src="vendor/jquery-ui/ui/resizable.js"></script>
<script src="vendor/fullcalendar/fullcalendar.js"></script>
<script src="vendor/bootstrap/js/dist/modal.js"></script>
<!-- page specific js -->
<script src="js/calendar.js"></script>
</body>
</html>