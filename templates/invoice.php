<!DOCTYPE html>
<html>
<head>
    <title>Sing - Invoice</title>
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
        <div class="row">
            <div class="col-lg-11">
                <section class="widget widget-invoice">
                    <header>
                        <div class="row">
                            <div class="col-md-6 col-print-6">
                                <img src="demo/img/logo/invoice-logo.png" alt="Logo" class="invoice-logo"/>
                            </div>
                            <div class="col-md-6 col-print-6">
                                <h4 class="text-xs-right">
                                    #<span class="fw-semi-bold">9.45613</span> / <small>17 May 2014</small>
                                </h4>
                                <div class="text-muted fs-larger text-xs-right">
                                    Some Invoice number description or whatever
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="widget-body">
                        <div class="row mb-lg">
                            <section class="col-md-6 col-print-6">
                                <h5 class="text-muted no-margin">Company Information</h5>
                                <h3 class="company-name m-t-1">
                                    Wrapbootstrap LLC
                                </h3>
                                <address>
                                    <strong>2 Infinite Loop</strong><br>
                                    Minsk, Belarus 220004<br>
                                    088.253.5345<br>
                                    <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">email@example.com</a><br>
                                    <abbr title="Work Phone">phone:</abbr> (012) 345-678-901<br>
                                    <abbr title="Work Fax">fax:</abbr> (012) 678-132-901
                                </address>
                            </section>
                            <section class="col-md-6 col-print-6 text-xs-right">
                                <h5 class="text-muted no-margin">Client Information</h5>
                                <h3 class="client-name m-t-1">
                                    Veronica Niasvizhskaja
                                </h3>
                                <address>
                                    <strong>Consultant</strong> at
                                    <a href="#">Allspana</a><br>
                                    <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">maryna@allspana.by</a><br>
                                    <abbr title="Work Phone">phone:</abbr> (012) 345-678-901<br>
                                    <abbr title="Work Fax">fax:</abbr> (012) 678-132-901
                                    <p class="no-margin"><strong>Note:</strong></p>
                                    <p class="text-muted">Some nights I stay up cashing in my bad luck.
                                        Some nights I call it a draw</p>
                                </address>
                            </section>
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Item</th>
                                <th class="hidden-sm-down">Description</th>
                                <th>Quantity</th>
                                <th class="hidden-sm-down">Price per Unit</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Brand-new 27' monitor</td>
                                <td class="hidden-sm-down">2,560x1,440-pixel (WQHD) resolution supported!</td>
                                <td>2</td>
                                <td class="hidden-sm-down">700</td>
                                <td>1,400.00</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Domain: okendoken.com</td>
                                <td class="hidden-sm-down">6-month registration</td>
                                <td>1</td>
                                <td class="hidden-sm-down">10.99</td>
                                <td>21.88</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Atlas Shrugged</td>
                                <td class="hidden-sm-down">Novel by Ayn Rand, first published in 1957 in the US</td>
                                <td>5</td>
                                <td class="hidden-sm-down">35</td>
                                <td>175.00</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>New Song by Dr. Pre</td>
                                <td class="hidden-sm-down">Lyrics: praesent blandit augue non sapien ornare imperdiet</td>
                                <td>1</td>
                                <td class="hidden-sm-down">2</td>
                                <td>2.00</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-8 col-print-6">
                                <p>
                                    <strong>Note:</strong>
                                    Thank you for your business. Keep in mind, sometimes bad things happen. But it's just sometimes.
                                </p>
                            </div>
                            <div class="col-md-4 col-print-6">
                                <div class="row text-xs-right">
                                    <div class="col-xs-6"></div> <!-- instead of offset -->
                                    <div class="col-xs-3">
                                        <p>Subtotal</p>
                                        <p>Tax(10%)</p>
                                        <p class="no-margin"><strong>Total</strong></p>
                                    </div>
                                    <div class="col-xs-3">
                                        <p>1,598.88</p>
                                        <p>159.89</p>
                                        <p class="no-margin"><strong>1,758.77</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-xs-right mt-lg mb-xs">
                            Marketing Consultant
                        </p>
                        <p class="text-xs-right">
                            <span class="fw-semi-bold">Bob Smith</span>
                        </p>
                        <div class="btn-toolbar mt-lg hidden-print print-buttons">
                            <button id="print" class="btn btn-inverse">
                                <i class="fa fa-print"></i>
                                &nbsp;&nbsp;
                                Print
                            </button>
                            <button class="btn btn-danger">
                                Proceed with Payment
                                &nbsp;
                                <span class="circle bg-white">
                                    <i class="fa fa-arrow-right text-danger"></i>
                                </span>
                            </button>
                        </div>
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
<!-- page specific js -->
<script src="js/invoice.js"></script>
</body>
</html>