<!DOCTYPE html>
<html>
<head>
    <title>Sing - Charts</title>
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
            <li class="active">Charts</li>
        </ol>
        <h1 class="page-title">Visual - <span class="fw-semi-bold">Charts</span></h1>
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <section class="widget">
                    <header>
                        <h5>
                            Flot <span class="fw-semi-bold">Charts</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <div class="mt mb" id="flot-main" style="width: 100%; height: 260px;"></div>
                        <div class="chart-tooltip" id="flot-main-tooltip" style="opacity: 0"></div>
                        <p class="fs-mini text-muted">
                            Flot is a <span class="fw-semi-bold">pure</span> JavaScript plotting library for jQuery, with a
                            focus on simple usage, attractive looks and interactive features.
                        </p>
                        <h5 class="mt">Interactive <span class="fw-semi-bold">Sparklines</span></h5>
                        <div class="row mt">
                            <div class="col-md-6">
                                <div class="stats-row">
                                    <div class="stat-item">
                                        <p class="value5 fw-thin">34 567</p>
                                        <h6 class="name text-muted no-margin fs-mini">Overall Values</h6>
                                    </div>
                                    <div class="stat-item stat-item-mini-chart">
                                        <div class="sparkline" data-type="bar" data-bar-color="#f0b518"
                                             data-height="30" data-bar-width="6" data-bar-spacing="2">9,12,14,15,10,14,20</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="stats-row">
                                    <div class="stat-item">
                                        <p class="value5 fw-thin">34 567</p>
                                        <h6 class="name text-muted no-margin fs-mini">Overall Values</h6>
                                    </div>
                                    <div class="stat-item stat-item-mini-chart">
                                        <div class="sparkline" data-type="bar" data-bar-color="#FFA587"
                                             data-height="30" data-bar-width="6" data-bar-spacing="2">9,12,14,15,10,14,20</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="fs-mini text-muted">
                            This jQuery plugin generates sparklines (small inline charts) directly in the browser using
                            data supplied either inline in the HTML, or via javascript.
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-4">
                <section class="widget">
                    <header>
                        <h5>
                            Realtime <span class="fw-semi-bold">Rickshaw</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted mb-lg">
                            Rickshaw provides the elements you need to create interactive graphs: renderers, legends,
                            hovers, range selectors, etc. You put the pieces together.
                            It's all based on <span class="fw-semi-bold">d3</span> underneath, so graphs are drawn with standard SVG and styled with CSS.
                            Customize all you like with techniques you already know.
                        </p>
                        <h5>720 Users</h5>
                        <div class="bg-gray-lighter progress-bar">
                            <progress class="progress progress-xs progress-bar-gray-light" value="100" max="100" style="width: 60%"></progress>
                        </div>
                        <p class="fs-mini text-muted mb-lg">
                            <span class="circle bg-success text-white">
                                <i class="fa fa-circle"></i>
                            </span>
                            &nbsp;
                            Target <span class="fw-semi-bold">820</span> users
                            is <span class="fw-semi-bold">96%</span> reached.
                        </p>
                        <div id="rickshaw" class="chart-overflow-bottom"></div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-3">
                <section class="widget">
                    <header>
                        <h5>
                            Line <span class="fw-semi-bold">Sparkline</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Each example displayed below takes just 1 line of HTML or javascript to generate.
                        </p>
                        <div class="stats-row mt">
                            <div class="stat-item">
                                <h6 class="name">Overall Growth</h6>
                                <p class="value">43.75%</p>
                            </div>
                            <div class="stat-item">
                                <h6 class="name">Montly</h6>
                                <p class="value">86.34%</p>
                            </div>
                        </div>
                        <p class="text-muted fs-mini">
                            <span class="fw-semi-bold">17% higher</span> than last month</p>
                        <div id="sparkline1" class="chart-overflow-bottom"></div>
                    </div>
                </section>
                <section class="widget">
                    <header>
                        <h5>
                            Sparkline <span class="fw-semi-bold">Pie Charts</span>
                        </h5>
                        <div class="widget-controls">
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Each example displayed below takes just 1 line of HTML or javascript to generate.
                        </p>
                        <div id="sparkline2" class="chart-overflow-bottom mb-0 text-xs-center"></div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-xl-8">
                <section class="widget">
                    <header>
                        <h5>
                            <span class="fw-semi-bold">D3</span> Charts
                        </h5>
                        <div class="widget-controls">
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            This project is an attempt to build re-usable charts and chart components for <span class="fw-semi-bold">d3.js</span> without
                            taking away the power that d3.js gives you.
                        </p>
                        <div id="nvd31">
                            <svg></svg>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-5 col-xl-4">
                <section class="widget">
                    <header>
                        <h5>
                            <span class="fw-semi-bold">D3</span> Charts
                        </h5>
                        <div class="widget-controls">
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            This is a very young collection of components, with the goal of keeping these components
                            very customizeable.
                        </p>
                        <div id="nvd32">
                            <svg></svg>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <section class="widget">
                    <header>
                        <h5>
                            Morris <span class="fw-semi-bold">Area Charts</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Good-looking charts shouldn't be difficult.
                            The public API is terribly simple. It's just one function: <code>Morris.Line(options)</code>,
                            where options is an object containing some of the following configuration options.
                        </p>
                        <div id="morris2">
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="widget">
                    <header>
                        <h5>
                            Morris <span class="fw-semi-bold">Line Charts</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <p class="fs-mini text-muted">
                            Good-looking charts shouldn't be difficult.
                            The public API is terribly simple. It's just one function: <code>Morris.Line(options)</code>,
                            where options is an object containing some of the following configuration options.
                        </p>
                        <div id="morris1">
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xl-4">
                <section class="widget">
                    <header>
                        <h5>
                            Easy <span class="fw-semi-bold">Pie Charts</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body clearfix">
                        <div class="text-xs-center">
                            <div class="easy-pie-chart mb-lg" id="easy-pie1" data-percent="73">
                                73
                            </div>
                        </div>
                        <p class="fs-mini text-muted">
                            Easy pie chart is a jQuery plugin that uses the canvas element to render simple pie charts
                            for single values. These charts are highly customizable, very easy to implement, scale to
                            the resolution of the display of the client to provide sharp charts even on retina displays.
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-4">
                <section class="widget">
                    <header>
                        <h5>
                            Morris <span class="fw-semi-bold">Donut Charts</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <div id="morris3">
                        </div>
                        <p class="fs-mini text-muted">
                            Donuts a great for representing some parted information like traffice sources,
                            disk partitions, etc.
                            This really couldn't be easier. Create a Donut chart using <code>Morris.Donut(options)</code>,
                            with only few options.
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-lg-12 col-xl-4">
                <section class="widget">
                    <header>
                        <h5>
                            Flot <span class="fw-semi-bold">Bars</span>
                        </h5>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <div class="mt-lg" id="flot-bar" style="width: 100%; height: 260px;"></div>
                        <p class="fs-mini text-muted">
                            Flot is a <span class="fw-semi-bold">pure</span> JavaScript plotting library for jQuery, with a
                            focus on simple usage, attractive looks and interactive features.
                        </p>
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
<script src="vendor/d3/d3.min.js"></script>
<script src="vendor/rickshaw/rickshaw.min.js"></script>
<script src="vendor/raphael/raphael-min.js"></script>
<script src="vendor/flot.animator/jquery.flot.animator.min.js"></script>
<script src="vendor/flot/jquery.flot.js"></script>
<script src="vendor/flot-orderBars/js/jquery.flot.orderBars.js"></script>
<script src="vendor/flot/jquery.flot.selection.js"></script>
<script src="vendor/flot/jquery.flot.time.js"></script>

<script src="vendor/nvd3/build/nv.d3.min.js"></script>
<script src="vendor/morris.js/morris.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

<!-- page specific js -->
<script src="js/charts.js"></script>

</body>
</html>