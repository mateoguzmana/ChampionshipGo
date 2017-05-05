<!DOCTYPE html>
<html>
<head>
    <title>Sing - Tabs & Accordion</title>
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
            <li class="active">UI Tabs & Accordion</li>
        </ol>
        <h1 class="page-title">Tabs & Accordion - <span class="fw-semi-bold">Components</span></h1>
        <div class="row mb-lg">
            <div class="col-lg-6">
                <div class="clearfix">
                    <ul class="nav nav-tabs pull-xs-left" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="basic" aria-expanded="true">Basic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#assumtion" role="tab" aria-controls="assumtion" aria-expanded="false">Assumtion</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role="tab" data-toggle="tab" aria-controls="dropdown1" aria-expanded="false">@fat</a>
                            <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab" data-toggle="tab" aria-controls="dropdown2" aria-expanded="false">@mdo</a>
                        </div>
                    </li>
                </ul>
                </div>
                <div class="tab-content mb-lg" id="myTabContent">
                    <div role="tabpanel" class="tab-pane active in clearfix" id="basic" aria-labelledby="basic-tab" aria-expanded="true">
                        <h3>Tabs-enabled widget</h3>
                        <p>You will never know exactly how something will go until you try it.</p>
                        <p>You can think three hundred times and still have no precise result. If you see
                            attractive girl all you need to do is to go and ask her to give you her phone. You don’t
                            need to think about HOW it can turn out. All you have to do is to GO and DO IT. It
                            should be super-fast and easy. No hesitation. You ask me: “What to do with these
                            fearful thoughts preventing me from doing that?” The answer is to ignore them, because
                            they can’t disappear immediately.</p>
                        <p>The same thing is for startups and ideas. If you have an idea right away after it appears in your mind you should go and make a first step to implement it. </p>
                        <div class="pull-xs-right">
                            <button class="btn btn-inverse">Cancel</button>
                            <button class="btn btn-primary">Some button</button>
                        </div>
                    </div>
                    <div class="tab-pane" id="assumtion" role="tabpanel" aria-labelledby="assumtion-tab" aria-expanded="false">
                        <p>Why don't use Lore Ipsum? I think if some one says don't use lore ipsum it's very controversial
                            point. I think the opposite actually. Everyone knows what is lore ipsum - it is easy to understand if text is lore ipsum.</p>
                        <div class="clearfix">
                            <div class="btn-toolbar">
                                <a class="btn btn-default" href="#">&nbsp;&nbsp;Check&nbsp;&nbsp;</a>
                                <a class="btn btn-primary" href="#">&nbsp;&nbsp;Dance?&nbsp;&nbsp;</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab" aria-expanded="false">
                        <p> If you will think too much it will sink in the swamp of never implemented plans and
                            ideas or will just go away or will be implemented by someone else.</p>
                        <p><strong>5 months of doing everything to achieve nothing.</strong></p>
                        <p>You'll automatically skip - because you know - it's just non-informative stub. But what if there some text like this one?</p>
                    </div>
                    <div class="tab-pane" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab" aria-expanded="false">
                        <blockquote class="blockquote-sm blockquote mb-xs">
                            Plan it? Make it!
                        </blockquote>
                        <p>The same thing is for startups and ideas. If you have an idea right away after it appears
                            in your mind you should go and make a first step to implement it.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tabbable tabs-left mb-lg">
                    <ul id="tabs2" class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link" href="#tab12" data-toggle="tab">Basic</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#tab22" data-toggle="tab">Assumtion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab32"  data-toggle="tab">Works</a></li>
                    </ul>
                    <div id="tabs2c" class="tab-content">
                        <div class="tab-pane" id="tab12">
                            <p>
                                I had an idea named Great Work. It was a service aimed to help people find their passion.
                                Yes I know it sound crazy and super naïve but I worked on that. I started to work on
                                planning, graphics, presentations, pictures, descriptions, articles, investments and so on.
                                I worked on everything but not the project itself.
                            </p>
                        </div>
                        <div class="tab-pane active" id="tab22">
                            <p>Why don't use Lore Ipsum? I think if some one says don't use lore ipsum it's very controversial
                                point. I think the opposite actually. Everyone knows what is lore ipsum - it is easy to understand if text is lore ipsum.</p>
                            <div class="clearfix">
                                <div class="btn-toolbar">
                                    <a class="btn btn-danger" href="#">&nbsp;&nbsp;Check&nbsp;&nbsp;</a>
                                    <a class="btn btn-secondary" href="#">&nbsp;&nbsp;Dance?&nbsp;&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab32">
                            <p> If you will think too much it will sink in the swamp of never implemented plans and
                                ideas or will just go away or will be implemented by someone else.</p>
                            <p><strong>5 months of doing everything to achieve nothing.</strong></p>
                            <p>You'll automatically skip - because you know - it's just non-informative stub. But what if there some text like this one?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tabbable tabs-right">
                    <ul id="tabs3" class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#tab13" data-toggle="tab">Basic</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab23" data-toggle="tab">Assumtion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab33"  data-toggle="tab">Works</a></li>
                    </ul>
                    <div id="tabs3c" class="tab-content">
                        <div class="tab-pane" id="tab13">
                            <p>
                                I had an idea named Great Work. It was a service aimed to help people find their passion.
                                Yes I know it sound crazy and super naïve but I worked on that. I started to work on
                                planning, graphics, presentations, pictures, descriptions, articles, investments and so on.
                                I worked on everything but not the project itself.
                            </p>
                        </div>
                        <div class="tab-pane" id="tab23">
                            <p>Why don't use Lore Ipsum? I think if some one says don't use lore ipsum it's very controversial
                                point. I think the opposite actually. Everyone knows what is lore ipsum - it is easy to understand if text is lore ipsum.</p>
                            <div class="clearfix">
                                <div class="btn-toolbar">
                                    <a class="btn btn-primary" href="#">&nbsp;&nbsp;Check&nbsp;&nbsp;</a>
                                    <a class="btn btn-default" href="#">&nbsp;&nbsp;Dance?&nbsp;&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="tab33">
                            <p> If you will think too much it will sink in the swamp of never implemented plans and
                                ideas or will just go away or will be implemented by someone else.</p>
                            <p><strong>5 months of doing everything to achieve nothing.</strong></p>
                            <p>You'll automatically skip - because you know - it's just non-informative stub. But what if there some text like this one?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel-group mb-lg" id="accordion" data-toggle="collapse">
                    <div class="panel panel-default">
                        <div class="panel-heading collapsed">
                            <h6 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Collapsible Group Item
                                    <i class="fa fa-angle-down pull-xs-right"></i>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                Get base styles and flexible support for collapsible components like accordions and navigation.
                                Using the collapse plugin, we built a simple accordion by extending the panel component.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    Random from the Web
                                    <i class="fa fa-angle-down pull-xs-right"></i>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p><span class="fw-semi-bold">Light Blue</span> - is a next generation admin template based on the latest Metro design. There are few reasons we want to tell you, why we have created it: We didn't like the darkness of most of admin templates, so we created this light one. We didn't like the high contrast of most of admin templates, so we created this unobtrusive one. We searched for a
                                    solution of how to make widgets look like real widgets, so we decided that deep background - is what makes widgets look real.
                                </p>
                                <p class="no-margin text-muted"><em>- Some One</em></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    Check It
                                    <i class="fa fa-angle-down pull-xs-right"></i>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Why don't use Lore Ipsum? I think if some one says don't use lore ipsum it's very controversial point. I think the opposite actually.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel-group mb-lg" id="accordion2" data-toggle="collapse">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
                                    Collapsible Group Item
                                    <i class="fa fa-angle-down pull-xs-right"></i>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseOne2" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Get base styles and flexible support for collapsible components like accordions and navigation.
                                Using the collapse plugin, we built a simple accordion by extending the panel component.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading collapsed">
                            <h6 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">
                                    Normal Text Insertion
                                    <i class="fa fa-angle-down pull-xs-right"></i>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseTwo2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Why don't use Lore Ipsum? I think if some one says don't use lore ipsum it's very
                                    controversial point. I think the opposite actually. Everyone knows what is lore ipsum
                                    - it is easy to understand if text is lore ipsum. You'll automatically skip -
                                    because you know - it's just non-informative stub. But what if there some text like
                                    this one? You start to read it! But the goal of this text is different. The goal is
                                    the example. So a bit of Lore Ipsum is always very good practice. Keep it in mind!</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                    Check It
                                    <i class="fa fa-angle-down pull-xs-right"></i>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseThree2" class="panel-collapse collapse">
                            <div class="panel-body">
                                Why don't use Lore Ipsum? I think if some one says don't use lore ipsum it's very controversial point. I think the opposite actually.
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
<script src="js/bootstrap-fix/collapse.js"></script>
<script src="js/ui-tabs-accordion.js"></script>

<!-- page specific libs -->
<script src="vendor/bootstrap/js/dist/tab.js"></script>
<!-- page specific js -->
</body>
</html>