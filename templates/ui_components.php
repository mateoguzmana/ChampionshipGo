<!DOCTYPE html>
<html>
<head>
    <title>Sing - Components</title>
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
            <li class="active">UI Components</li>
        </ol>
        <h1 class="page-title">Components - <span class="fw-semi-bold">Bootstrap</span></h1>
        <section class="widget">
            <header>
                <h6>
                    Alert <span class="fw-semi-bold">Messages</span>
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#"><i class="fa fa-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <h3>Small <span class="fw-semi-bold">Elements</span></h3>
                <p class="mb-lg">Gaining direct user attention on some matter. Add dismiss functionality to all alert messages with this plugin.</p>
                <div class="alert alert-success alert-sm">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span class="fw-semi-bold">Success:</span> You successfully read this important alert message.
                </div>
                <div class="alert alert-info alert-sm">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span class="fw-semi-bold">Info:</span> This alert needs your attention, but it's not super important.
                </div>
                <div class="alert alert-warning alert-sm">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span class="fw-semi-bold">Warning:</span> Best check yo self, you're not looking too good.
                </div>
                <div class="alert alert-danger alert-sm">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span class="fw-semi-bold">Danger:</span> Change this and that and try again.
                    <a class="btn btn-secondary btn-xs pull-xs-right mr" href="#">Ignore</a>
                    <a class="btn btn-danger btn-xs pull-xs-right mr-xs" href="#">Take this action</a>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-6">
                <section class="widget">
                    <header>
                        <h6>
                            Labels & Badge <span class="fw-semi-bold">Options</span>
                        </h6>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3>Label <span class="fw-semi-bold">Colors</span></h3>
                        <p>Just add the <code>.label</code> class to inline element to create a label.</p>
                        <p>
                            <span class="label label-default">Default</span>
                            <span class="label label-primary">Primary</span>
                            <span class="label label-info">Info</span>
                            <span class="label label-success">Success</span>
                            <span class="label label-warning">Warning</span>
                            <span class="label label-danger">Danger</span>
                        </p>
                        <h3>Badge <span class="fw-semi-bold">Variations</span></h3>
                        <p>Same as labels, just add the <code>.label-pill</code> class to inline element to create a badge.</p>
                        <p>
                            <button class="btn btn-primary" type="button">
                                Notifications &nbsp;&nbsp; <span class="label label-pill text-primary label-white">3</span>
                            </button>
                            <span class="label label-pill label-danger">01</span>
                            <span class="label label-pill label-warning">20</span>
                            <span class="label label-pill label-success">31</span>
                            <span class="label label-pill label-info">18</span>
                            <span class="label label-pill label-primary">41</span>
                            <span class="label label-pill">9</span>
                        </p>
                        <!--<p>Both labes and badge may be used with <code>.text-*</code> classes to produce cool-->
                        <!--<abbr title="User Interface">UI</abbr> look.</p>-->
                        <!--<p>-->
                        <!--<span class="label bg-gray text-warning fw-bold">12</span>-->
                        <!--<span class="label label-primary text-gray-dark fw-bold">Dark</span>-->
                        <!--<span class="badge bg-warning"><span class="text-gray-dark">19</span></span>-->
                        <!--<span class="label bg-gray-lighter text-danger">Valid</span>-->
                        <!--<span class="badge bg-gray"><span class="text-success">success</span></span>-->
                        <!--</p>-->
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="widget">
                    <header>
                        <h6>
                            Tooltips & Popover <span class="fw-semi-bold">Variations</span>
                        </h6>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#"><i class="fa fa-refresh"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3>Position <span class="fw-semi-bold">Tooltips</span></h3>
                        <p class="no-margin">Stable four position options available:</p>
                        <div class="btn-toolbar">
                            <a href="#" class="m-t-1 btn btn-secondary" data-toggle="tooltip" data-placement="left"
                               title="Tooltip on left">On left
                            </a>
                            <a href="#" class="m-t-1 btn btn-secondary" data-toggle="tooltip" data-placement="top"
                               title="Tooltip on top">On top
                            </a>
                            <a href="#" class="m-t-1 btn btn-secondary" data-toggle="tooltip" data-placement="bottom"
                               title="Tooltip on bottom">On bottom
                            </a>
                            <a href="#" class="m-t-1 btn btn-secondary" data-toggle="tooltip" data-placement="right"
                               title="Tooltip on right">On right
                            </a>
                        </div>
                        <h3>Popover <span class="fw-semi-bold">Options</span></h3>
                        <p class="no-margin">Placing help text where needed:</p>
                        <div class="btn-toolbar">
                            <button type="button" class="m-t-1 btn btn-secondary" data-toggle="popover" title=""
                                    data-placement="left"
                                    data-content="And here's some amazing content. It's very engaging. right?">
                                Popover on left
                            </button>
                            <button type="button" class="m-t-1 btn btn-info" data-toggle="popover" title=""
                                    data-placement="top"
                                    data-content="And here's some amazing content. It's very engaging. right?"
                                    data-original-title="A Title">
                                Titled Popover
                            </button>
                        </div>
                        <h3><span class="fw-semi-bold">Bootstrap</span> Modals</h3>
                        <p>Modals are streamlined, but flexible, dialog prompts with the minimum
                            required functionality and smart defaults.</p>
                        <button class="btn btn-gray" data-toggle="modal" data-target="#myModal18">
                            Launch demo modal
                        </button>
                        <div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h5 class="modal-title text-xl-center fw-bold mt" id="myModalLabel18">One more step</h5>
                                        <p class="text-xl-center text-muted mt-sm fs-mini">
                                            We need a bit of your detailed information to proceed. US ticketing system requires
                                            us to process and check your personal infromation before we can go.
                                        </p>
                                    </div>
                                    <div class="modal-body bg-gray-lighter">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Middle Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Country">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Zip">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="widget">
            <header>
                <h6>
                    Progress <span class="fw-semi-bold">Bars</span>
                </h6>
                <div class="widget-controls">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#"><i class="fa fa-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Progress Bar <span class="fw-semi-bold">Colors</span></h3>
                        <p class="text-muted">Easily perceptible colored options for Bootstrap progress bars:</p>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="bg-gray-lighter mt-md">
                                    <progress class="progress progress-sm progress-danger" value="100" max="100" style="width: 75%;"></progress>
                            </div>
                                <div class="bg-gray-lighter mt-md">
                                    <progress class="progress progress-sm progress-warning" value="100" max="100" style="width: 60%;"></progress>
                        </div>
                                <div class="bg-gray-lighter mt-md">
                                    <progress class="progress progress-sm progress-success" value="100" max="100" style="width: 45%;"></progress>
                    </div>
                                <div class="bg-gray-lighter mt-md">
                                    <progress class="progress progress-sm progress-primary" value="100" max="100" style="width: 30%;"></progress>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3>Progress Bar <span class="fw-semi-bold">Sizes</span></h3>
                        <p class="text-muted">Three different sizes for all of possible use cases:</p>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="bg-gray-lighter mt-md">
                                    <progress class="progress progress-xs progress-bar-gray" value="100" max="100" style="width: 60%;"></progress>
                            </div>
                                <div class="bg-gray-lighter mt-md">
                                    <progress class="progress progress-sm progress-warning" value="100" max="100" style="width: 60%;"></progress>
                        </div>
                                <div class="bg-gray-lighter mt-md">
                                    <progress class="progress progress progress-info" value="100" max="100" style="width: 33%;"></progress>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3>More <span class="fw-semi-bold">Options</span></h3>
                        <div class="alert alert-warning alert-sm">Animated and containg text progress bars are not yet supported in Bootstrap 4</div>
                        <p class="text-muted">Animated, stripped and progress bars containing text:</p>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="bg-gray-lighter mt-md">
                                    <progress class="progress progress-striped progress-animated progress-info" value="100" max="100" style="width: 60%;">
                                        $24 818
                                    </progress>
                                </div>
                                <div class="bg-gray-lighter mt-md">
                                    <progress class="progress progress-sm progress-striped progress-bar-gray-light" value="100" max="100" style="width: 60%;">
                                    </progress>
                                </div>
                            </div>
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
<script src="vendor/bootstrap/js/dist/popover.js"></script>
<script src="vendor/bootstrap/js/dist/modal.js"></script>
<!-- page specific js -->
<script src="js/ui-components.js"></script>
</body>
</html>