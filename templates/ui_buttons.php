<!DOCTYPE html>
<html>
<head>
    <title>Sing - Buttons</title>
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
            <li class="active">UI Buttons</li>
        </ol>
        <h1 class="page-title">Buttons - <span class="fw-semi-bold">Styles</span></h1>
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <section class="widget">
                    <header>
                        <h5>
                            Color <span class="fw-semi-bold">Options</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Use any of the available button classes to quickly create a styled button.
                            Semantically distinguishable beauty.
                        </p>
                        <p class="text-xs-center">
                            <button class="btn btn-secondary width-100 mb-xs" role="button">
                                Secondary
                            </button>
                            <button class="btn btn-primary width-100 mb-xs" role="button">
                                Primary
                            </button>
                            <button class="btn btn-info width-100 mb-xs" role="button">
                                Info
                            </button>
                            <button class="btn btn-success width-100 mb-xs" role="button">
                                Success
                            </button>
                            <button class="btn btn-warning width-100 mb-xs" role="button">
                                Warning
                            </button>
                            <button class="btn btn-danger width-100 mb-xs" role="button">
                                Danger
                            </button>
                            <button class="btn btn-gray width-100 mb-xs" role="button">
                                Gray
                            </button>
                            <button class="btn btn-inverse width-100 mb-xs" role="button">
                                Inverse
                            </button>
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-xl-4 col-lg-6">
                <section class="widget">
                    <header>
                        <h5>
                            Size <span class="fw-semi-bold">Variants</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Fancy larger or smaller buttons? Four separate sizes available for all use cases: from
                            tiny 10px button to large one.
                        </p>
                        <p class="mb-xs">
                            <button type="button" class="btn btn-primary btn-lg mb-xs">Large button</button>
                            <button type="button" class="btn btn-secondary btn-lg mb-xs">Large button</button>
                        </p>
                        <p class="mb-xs">
                            <button type="button" class="btn btn-primary mb-xs">Default button</button>
                            <button type="button" class="btn btn-secondary mb-xs">Default button</button>
                        </p>
                        <p class="mb-xs">
                            <button type="button" class="btn btn-primary btn-sm mb-xs">Small button</button>
                            <button type="button" class="btn btn-secondary btn-sm mb-xs">Small button</button>
                        </p>
                        <p class="mb-xs">
                            <button type="button" class="btn btn-primary btn-xs mb-xs">Tiny button</button>
                            <button type="button" class="btn btn-secondary btn-xs mb-xs">Tiny button</button>
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-xl-4 col-lg-6">
                <section class="widget">
                    <header>
                        <h5>
                            Block <span class="fw-semi-bold">Buttons</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Create block level buttons - those that span the full width
                            of a parent— by adding <code>.btn-block</code>.
                            Great for menu & social buttons.
                        </p>
                        <p>
                            <button type="button" class="btn btn-info btn-block">Block Button</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-secondary btn-block">Show Menu &nbsp;&nbsp;&nbsp;<i class="fa fa-bars"></i></button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Login mit Facebook</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-warning btn-block">Are you sure?</button>
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-xl-4 col-lg-6">
                <section class="widget">
                    <header>
                        <h5>
                            Disabled <span class="fw-semi-bold">Buttons</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Make buttons look unclickable by fading them back 50%.
                            Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.
                        </p>
                        <p>
                            <button type="button" class="btn btn-primary" disabled="disabled">Primary button</button>
                            <button type="button" class="btn btn-secondary" disabled="disabled">Button</button>
                        </p>
                        <p>
                            <a href="#" class="btn btn-success btn-sm disabled" role="button">Primary link</a>
                            <a href="#" class="btn btn-secondary btn-sm disabled" role="button">Link</a>
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-xl-4 col-lg-6">
                <section class="widget">
                    <header>
                        <h5>
                            Button <span class="fw-semi-bold">Groups</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Group a series of buttons together on a single line with the button group.
                            Add on optional JavaScript radio and checkbox style behavior with Bootstrap buttons plugin.
                        </p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">Left</button>
                            <button type="button" class="btn btn-secondary">Middle</button>
                            <button type="button" class="btn btn-secondary">Right</button>
                        </div>
                        <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">1</button>
                                <button type="button" class="btn btn-secondary">2</button>
                                <button type="button" class="btn btn-secondary">3</button>
                                <button type="button" class="btn btn-secondary">4</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">5</button>
                                <button type="button" class="btn btn-secondary">6</button>
                                <button type="button" class="btn btn-secondary">7</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">8</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-xl-4 col-lg-6">
                <section class="widget">
                    <header>
                        <h5>
                            Button <span class="fw-semi-bold">Dropdowns</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Add dropdown menus to nearly anything with this simple plugin, including the buttons,
                            navbar, tabs, and pills.
                            Both solid & segmented dropdown options available.
                        </p>
                        <div class="mb-sm">
                            <div class="btn-group">
                                <button class="btn btn-danger" data-toggle="dropdown" data-original-title="" title="">
                                    &nbsp; One &nbsp;
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-gray btn-sm" data-toggle="dropdown" data-original-title="" title="">
                                    &nbsp; One &nbsp;
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group">
                                <button class="btn btn-secondary" data-original-title="" title="">Gray</button>
                                <button class="btn btn-secondary" data-toggle="dropdown" data-original-title="" title="">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-gray btn-sm" data-original-title="" title="">Gray</button>
                                <button class="btn btn-gray btn-sm" data-toggle="dropdown" data-original-title="" title="">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="widget">
            <header>
                <h6>
                    Button <span class="fw-semi-bold">Options</span>
                </h6>
                <div class="widget-controls">
                    <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                    <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-4">
                        <h4>
                           Button <span class="fw-semi-bold">Checkboxes</span>
                        </h4>
                        <p class="fs-mini text-muted">
                            Do more with buttons. Control button states or create groups of buttons for more components like toolbars.
                            Add <code>data-toggle="buttons"</code> to a group of checkboxes for checkbox style toggling on btn-group.
                        </p>
                        <div class="mb-sm">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-gray">
                                    <input type="checkbox"> Left way
                                </label>
                                <label class="btn btn-gray">
                                    <input type="checkbox"> Middle way
                                </label>
                                <label class="btn btn-gray">
                                    <input type="checkbox"> Right way
                                </label>
                            </div>
                        </div>
                        <div class="mb-sm">
                            <div class="btn-group btn-group-sm" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                    <input type="checkbox"> Left way
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="checkbox"> Middle way
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="checkbox"> Right way
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <h4>
                            Button <span class="fw-semi-bold">Radios</span>
                        </h4>
                        <p class="fs-mini text-muted">
                            Do more with buttons. Control button states or create groups of buttons for more components like toolbars.
                            Add <code>data-toggle="buttons"</code> to a group of radio inputs for radio style toggling on btn-group.
                        </p>
                        <div class="mb-sm">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-gray">
                                    <input type="radio" name="gr1"> Left way
                                </label>
                                <label class="btn btn-gray">
                                    <input type="radio" name="gr1"> Middle way
                                </label>
                                <label class="btn btn-gray">
                                    <input type="radio" name="gr1"> Right way
                                </label>
                            </div>
                        </div>
                        <div class="mb-sm">
                            <div class="btn-group btn-group-sm" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                    <input type="radio" name="gr2"> Left way
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="gr2"> Middle way
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="gr2"> Right way
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <h4>
                            Use with <span class="fw-semi-bold">Icons</span>
                        </h4>
                        <p class="fs-mini text-muted">
                            Fontawesome and Glyph- icons may be used in buttons, button groups for a toolbar, navigation, or prepended form inputs.
                            Let your buttons shine!
                        </p>
                        <p class="text-xs-center">
                            <button class="btn btn-secondary width-100 mb-xs" role="button">
                                <i class="glyphicon glyphicon-tree-conifer text-success"></i>
                                Forest
                            </button>
                            <button class="btn btn-secondary width-100 mb-xs" role="button">
                                <i class="fa fa-check text-danger"></i>
                                Submit
                            </button>
                            <button class="btn btn-secondary width-100 mb-xs" role="button">
                                <i class="fa fa-facebook text-primary"></i>
                                Login
                            </button>
                        </p>
                        <p class="text-xs-center">
                            <button class="btn btn-inverse width-100 mb-xs" role="button">
                                <i class="fa fa-exclamation text-warning"></i>
                                Error
                            </button>
                            <button class="btn btn-inverse width-100 mb-xs" role="button">
                                <i class="glyphicon glyphicon-globe text-info"></i>
                                <span class="text-info">Globe</span>
                            </button>
                            <button class="btn btn-inverse width-100 mb-xs" role="button">
                                <span class="circle bg-white">
                                    <i class="fa fa-map-marker text-gray"></i>
                                </span>
                                Map
                            </button>
                        </p>
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
<!-- page specific js -->
<script src="js/ui-buttons.js"></script>
</body>
</html>