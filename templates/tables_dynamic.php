<!DOCTYPE html>
<html>
<head>
    <title>Sing - Tables Dynamic</title>
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
        <h1 class="page-title">Dynamic - <span class="fw-semi-bold">Tables</span></h1>
        <section class="widget">
            <header>
                <h4>
                    Table <span class="fw-semi-bold">Styles</span>
                </h4>
                <div class="widget-controls">
                    <div class="width-200">
                        <div class="input-group input-group-sm input-group-transparent input-group-rounded">
                            <span class="input-group-addon">
                                <i class="fa fa-search"></i>
                            </span>
                            <input class="form-control " id="search-countries" type="text" placeholder="Search Countries">
                        </div>
                    </div>
                </div>
            </header>
            <div class="widget-body">
                <p>
                    Editable, validatable, filterable and sortable table made with
                    <a href="http://backgridjs.com/" target="_blank">Backgrid.js</a>
                </p>
                <div id="table-dynamic"></div>
            </div>
        </section>
        <section class="widget">
            <header>
                <h4>Table <span class="fw-semi-bold">Styles</span></h4>
                <div class="widget-controls">
                    <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                    <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                    <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <p>
                    Column sorting, live search, pagination. Built with
                    <a href="http://www.datatables.net/" target="_blank">jQuery DataTables</a>
                </p>
                <div class="mt">
                    <table id="datatable-table" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th class="no-sort hidden-sm-down">Info</th>
                            <th class="hidden-sm-down">Description</th>
                            <th class="hidden-sm-down">Date</th>
                            <th class="no-sort">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><span class="fw-semi-bold">Algerd</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; JPEG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 200x150
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Palo Alto</a></td>
                            <td class="hidden-sm-down">June 27, 2013</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-success" value="100" max="100" style="width: 29%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><span class="fw-semi-bold">Vitaut</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; PNG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 6433x4522
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Vilnia</a></td>
                            <td class="hidden-sm-down">January 1, 1442</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-danger" value="100" max="100" style="width: 19%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><span class="fw-semi-bold">Honar</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; AVI
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 1440x980
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Berlin</a></td>
                            <td class="hidden-sm-down">August 6, 2013</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-bar-gray-light" value="100" max="100" style="width: 49%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><span class="fw-semi-bold">Jack</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; PNG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 12x43
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">San Francisco</a></td>
                            <td class="hidden-sm-down">August 19, 2013</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-primary" value="100" max="100" style="width: 69%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><span class="fw-semi-bold">Leon</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; MP4
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 800x480
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Brasilia</a></td>
                            <td class="hidden-sm-down">October 1, 2013</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-bar-gray-light" value="100" max="100" style="width: 9%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><span class="fw-semi-bold">Max</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; TXT
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Helsinki</a></td>
                            <td class="hidden-sm-down">October 29, 2013</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-warning" value="100" max="100" style="width: 38%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><span class="fw-semi-bold">Pol</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; MOV
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 640x480
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Radashkovichi</a></td>
                            <td class="hidden-sm-down">November 11, 2013</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-danger" value="100" max="100" style="width: 83%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><span class="fw-semi-bold">Chrishna</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; DOC
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Mumbai</a></td>
                            <td class="hidden-sm-down">December 2, 2013</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-info" value="100" max="100" style="width: 40%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><span class="fw-semi-bold">Leslie</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; AVI
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 4820x2140
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Singapore</a></td>
                            <td class="hidden-sm-down">December 6, 2013</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-warning" value="100" max="100" style="width: 18%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td><span class="fw-semi-bold">David</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; XML
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Portland</a></td>
                            <td class="hidden-sm-down">December 13, 2013</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-bar-gray-light" value="100" max="100" style="width: 54%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td><span class="fw-semi-bold">Andrej</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; VOB
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 6433x4522
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Minsk</a></td>
                            <td class="hidden-sm-down">December 14, 2013</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-primary" value="100" max="100" style="width: 25%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td><span class="fw-semi-bold">Julia</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; JPEG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 40x40
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Hrodna</a></td>
                            <td class="hidden-sm-down">July 9, 2012</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-warning" value="100" max="100" style="width: 50%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td><span class="fw-semi-bold">Ihnat</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; JAVA
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Los Angeles</a></td>
                            <td class="hidden-sm-down">August 2, 2012</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-success" value="100" max="100" style="width: 8%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td><span class="fw-semi-bold">Abraham</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; DOCX
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Panama</a></td>
                            <td class="hidden-sm-down">September 3, 2012</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-bar-gray-light" value="100" max="100" style="width: 80%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td><span class="fw-semi-bold">Tomas</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; JPEG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 1800x1420
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Amsterdam</a></td>
                            <td class="hidden-sm-down">November 13, 2012</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-bar-gray-light" value="100" max="100" style="width: 10%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td><span class="fw-semi-bold">Scott</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; PNG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 240x460
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Sluck</a></td>
                            <td class="hidden-sm-down">December 5, 2012</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-primary" value="100" max="100" style="width: 93%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td><span class="fw-semi-bold">Pham</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; MAIL
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; -
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Tokyo</a></td>
                            <td class="hidden-sm-down">December 8, 2012</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-danger" value="100" max="100" style="width: 44%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td><span class="fw-semi-bold">Peter</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; PNG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 8320x6400
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Cape Town</a></td>
                            <td class="hidden-sm-down">December 29, 2012</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-bar-gray-light" value="100" max="100" style="width: 5%"></progress>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td><span class="fw-semi-bold">Uladz'</span></td>
                            <td class="hidden-sm-down">
                                <small>
                                    <span class="fw-semi-bold">Type:</span>
                                    &nbsp; JPEG
                                </small>
                                <br>
                                <small>
                                    <span class="fw-semi-bold">Dimensions:</span>
                                    &nbsp; 2200x1600
                                </small>
                            </td>
                            <td class="hidden-sm-down"><a href="#">Mahileu</a></td>
                            <td class="hidden-sm-down">December 7, 2013</td>
                            <td class="width-150">
                                <div class="bg-gray-lighter progress-bar mt-xs">
                                    <progress class="progress progress-sm progress-bar-gray-light" value="100" max="100" style="width: 0%"></progress>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
<script src="vendor/underscore/underscore-min.js"></script>
<script src="vendor/backbone/backbone.js"></script>
<script src="vendor/backbone.paginator/lib/backbone.paginator.min.js"></script>
<script src="vendor/backgrid/lib/backgrid.js"></script>
<script src="vendor/backgrid-paginator/backgrid-paginator.js"></script>
<script src="vendor/datatables/media/js/jquery.dataTables.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- page specific js -->
<script src="js/tables-dynamic.js"></script>
</body>
</html>