<!DOCTYPE html>
<html>
<head>
    <title>Sing - Email</title>
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
            <li class="active">Email</li>
        </ol>
        <div class="alert alert-warning alert-sm pull-xs-right no-margin animated bounceInLeft hide" id="app-alert">
            <button type="button" class="ml-lg close" data-dismiss="alert" aria-hidden="true">×</button>
            Hey! This is a <span class="fw-semi-bold">real app</span> with CRUD and Search functions. Have fun!
        </div>
        <h1 class="page-title">Email - <span class="fw-semi-bold">Inbox</span></h1>
        <div class="row">
            <div class="col-lg-3 col-xl-2">
                <a class="btn btn-danger btn-block" id="compose-btn" href="compose.html">Compose</a>

                <ul class="nav nav-pills nav-stacked nav-email-folders mt" id="folders-list">
                    <li class="nav-item active">
                        <a class="nav-link" href="inbox.html">
                            <span class="label label-pill label-default pull-xs-right">2</span>
                            Inbox
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Starred</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sent Mail</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="label label-pill label-danger pull-xs-right">3</span>
                            Draft
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Trash</a></li>
                </ul>
                <h6 class="mt">QUICK VIEW</h6>
                <ul class="nav nav-pills nav-stacked nav-email-folders mb-lg fs-mini">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle text-danger pull-xs-right"></i> Work </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle text-white pull-xs-right"></i> Private </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle text-gray-light pull-xs-right"></i> Saved </a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-xl-10">
                <div class="clearfix mb-xs">
                    <a class="btn btn-secondary btn-sm width-50 pull-xs-left hide" id="back-btn" href="inbox.html">
                        <i class="fa fa-angle-left fa-lg"></i>
                    </a>
                    <div class="pull-xs-right" id="folder-stats">
                        <p class="widget-email-count">Showing 1 - 10 of 96 messages</p>
                        <ul class="pagination pagination-sm widget-email-pagination">
                            <li class="prev disabled page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li class="active page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="next page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <section class="widget widget-email">
                    <header id="widget-email-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="btn-group">
                                    <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" data-toggle="dropdown">
                                        Select
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" id="select-all" href="#">All</a></li>
                                        <li><a class="dropdown-item" id="select-none" href="#">None</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" id="select-read" href="#">Read</a></li>
                                        <li><a class="dropdown-item" id="select-unread" href="#">Unread</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-secondary dropdown-toggle" href="#" data-toggle="dropdown">
                                        Actions
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" id="reply" href="#">Reply</a></li>
                                        <li><a class="dropdown-item" id="forward" href="#">Forward</a></li>
                                        <li><a class="dropdown-item" id="archive" href="#">Archive</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" id="mark-as-read" href="#">Mark As Read</a></li>
                                        <li><a class="dropdown-item" id="mark-as-unread" href="#">Mark As Unread</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" id="delete" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input class="form-control form-control-sm width-200 pull-xs-right" id="mailbox-search" type="text" placeholder="Search Messages">
                            </div>
                        </div>
                    </header>
                    <div class="widget-body" id="mailbox-content">
                        <table class="table table-striped table-emails table-hover" id="folder-view" >
                            <thead>
                            <tr>
                                <th colspan="3" id="folder-actions">
                                    <div class="abc-checkbox">
                                        <input id="toggle-all" type="checkbox">
                                        <label for="toggle-all"></label>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="unread">
                                <td>
                                    <div class="abc-checkbox">
                                        <input type="checkbox" id="checkbox1">
                                        <label for="checkbox1"></label>
                                    </div>
                                </td>
                                <td><span class="starred"><i class="fa fa-star"></i></span></td>
                                <td class="name hidden-xs">Philip Horbacheuski</td>
                                <td class="subject">Hi, Welcome to Google Mail</td>
                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                <td class="date">May 19</td>
                            </tr><tr class="unread">
                                <td>
                                    <div class="abc-checkbox">
                                        <input type="checkbox" id="checkbox2">
                                        <label for="checkbox2"></label>
                                    </div>
                                </td>
                                <td><span class="starred"><i class="fa fa-star-o"></i></span></td>
                                <td class="name hidden-sm-down">StackExchange</td>
                                <td class="subject">New Python questions for this week!</td>
                                <td class="hidden-sm-down"><i class="fa fa-paperclip"></i></td>
                                <td class="date">Aug 14</td>
                            </tr><tr class="">
                                <td>
                                    <div class="abc-checkbox">
                                        <input type="checkbox" id="checkbox3">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                                <td><span class="starred"><i class="fa fa-star-o"></i></span></td>
                                <td class="name hidden-sm-down">notifications@facebook.com</td>
                                <td class="subject">Someone just commented on your photo!</td>
                                <td class="hidden-sm-down"></td>
                                <td class="date">Aug 7</td>
                            </tr><tr class="unread">
                                <td>
                                    <div class="abc-checkbox">
                                        <input type="checkbox" id="checkbox4">
                                        <label for="checkbox4"></label>
                                    </div>
                                </td>
                                <td><span class="starred"><i class="fa fa-star"></i></span></td>
                                <td class="name hidden-sm-down">Twitter</td>
                                <td class="subject">@hackernews is now following you on Twitter</td>
                                <td class="hidden-sm-down"></td>
                                <td class="date">Jul 31</td>
                            </tr><tr class="">
                                <td>
                                    <div class="abc-checkbox">
                                        <input type="checkbox" id="checkbox5">
                                        <label for="checkbox5"></label>
                                    </div>
                                </td>
                                <td><span class="starred"><i class="fa fa-star-o"></i></span></td>
                                <td class="name hidden-sm-down">Nikola Foley</td>
                                <td class="subject">Quiet led own cause three him</td>
                                <td class="hidden-sm-down"><i class="fa fa-paperclip"></i></td>
                                <td class="date">Jul 22</td>
                            </tr><tr class="">
                                <td>
                                    <div class="abc-checkbox">
                                        <input type="checkbox" id="checkbox6">
                                        <label for="checkbox6"></label>
                                    </div>
                                </td>
                                <td><span class="starred"><i class="fa fa-star-o"></i></span></td>
                                <td class="name hidden-sm-down">Ernst Hardy</td>
                                <td class="subject">Raising say express had chiefly detract demands she</td>
                                <td class="hidden-sm-down"></td>
                                <td class="date">Jul 15</td>
                            </tr><tr class="">
                                <td>
                                    <div class="abc-checkbox">
                                        <input type="checkbox" id="checkbox7">
                                        <label for="checkbox7"></label>
                                    </div>
                                </td>
                                <td><span class="starred"><i class="fa fa-star-o"></i></span></td>
                                <td class="name hidden-sm-down">LinkedIn</td>
                                <td class="subject">Jobs you may be interested in</td>
                                <td class="hidden-sm-down"></td>
                                <td class="date">Jul 12</td>
                            </tr><tr class="">
                                <td>
                                    <div class="abc-checkbox">
                                        <input type="checkbox" id="checkbox8">
                                        <label for="checkbox8"></label>
                                    </div>
                                </td>
                                <td><span class="starred"><i class="fa fa-star"></i></span></td>
                                <td class="name hidden-sm-down">Naevius Victorsson</td>
                                <td class="subject">Front no party young abode state up</td>
                                <td class="hidden-sm-down"></td>
                                <td class="date">Jul 11</td>
                            </tr></tbody>
                        </table>
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
<script src="vendor/bootstrap3-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
<script src="vendor/bootstrap3-wysihtml5/src/bootstrap3-wysihtml5.js"></script>
<script src="vendor/underscore/underscore-min.js"></script>
<script src="vendor/backbone/backbone.js"></script>
<!-- page specific js -->
<script src="js/inbox.js"></script>

<script type="text/template" id="folders-view-template">
    <table class="table table-striped table-emails table-hover">
        <thead>
        <tr>
            <th colspan="3">
                <div class="abc-checkbox">
                    <input type="checkbox" id="toggle-all">
                    <label for="toggle-all"></label>
                </div>
            </th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</script>

<script type="text/template" id="folder-template">
        <a class="nav-link" href="#">
            <% if (unread) {%><span class="label label-pill label-danger pull-xs-right"><%= unread %></span><% } %>
            <%= name %>
        </a>
</script>

<script type="text/template" id="mail-item-template">
    <td>
        <div class="abc-checkbox">
            <% checkboxId = Math.round(Math.random()*2344523) %>
            <input class="selected-checkbox" type="checkbox" id="checkbox<%= checkboxId %>" <%= selected ? 'checked="checked"' : ''%> />
            <label for="checkbox<%= checkboxId %>"></label>
        </div>
    </td>
    <td><span class="starred"><i class="<%= starred ? 'fa fa-star' : 'fa fa-star-o'%>"></i></span></td>
    <td class="name hidden-sm-down"><%= sender ? sender : senderMail %></td>
    <td class="subject"><%= subject %></td>
    <td class="hidden-sm-down"><% if (attachment) {%><i class="fa fa-paperclip"><% } %></i></td>
    <td class="date"><%= this.formatDate(timestamp) %></td>
</script>

<script type="text/template" id="email-view-template">
    <div class="email-details clearfix">
        <div class="email-details-content">
            <span class="thumb thumb-sm pull-xs-left">
                <img class="img-circle" src="demo/img/people/a5.jpg" alt="<%= sender %>" title="<%= sender %>">
            </span>
            <div class="pull-xs-left">
                <strong><%= sender ? sender : senderMail %></strong>
                <% if (senderMail) { %>
                <span class="email">&lt;<%= senderMail %>&gt;</span>
                <% } %>
                <span class="receiver">to Wrapbootstrap</span>
            </div>
            <div class="email-actions pull-xs-right">
                <div class="btn-group">
                    <button id="email-opened-reply" class="btn btn-sm btn-gray">
                        <i class="fa fa-reply"></i> Reply
                    </button>
                    <button class="btn btn-sm btn-gray dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-xs-right">
                        <li><a class="dropdown-item" href="#"><i class="fa fa-reply reply-btn"></i> Reply</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-arrow-right reply-btn"></i> Forward</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-print"></i> Print</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Spam</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div>
            </div>
            <time class="email-date pull-xs-right">
                <%= this.formatDate(timestamp) %>
            </time>
        </div>
    </div>
    <div class="email-body">
        <%= body %>
    </div>
    <% if (attachment) { %>
    <%
    attachments = attachments.split(",");
    attachmentsCount = attachments.length
    %>
    <div class="email-attachments">
        <div class="row">
            <div class="col-sm-6">
                <hr>
                <p class="details"><strong><%= attachmentsCount %> attachments</strong> &nbsp;-&nbsp; <a href="#">Download all attachments</a>
                    &nbsp;&nbsp;&nbsp;<a href="#">View all Images</a></p>
                <% i = 1 %>
                <% _.each(attachments, function(attachment){ %>
                <% size = Math.round(Math.random()*1000) %>
                <section class="attachment">
                    <img class="img-fluid" src="<%= attachment %>" alt=""/>
                    <h6 class="title">some-cool-image<%= i++ %>.jpg</h6>
                    <p class="details">
                        <%= size %>K  &nbsp;&nbsp;
                        <a href="#">View</a> &nbsp;&nbsp;
                        <a href="#">Download</a>
                    </p>
                </section>
                <% }); %>
            </div>
        </div>
    </div>
    <% } %>
</script>

<script type="text/template" id="compose-view-template">
    <form id="email-compose" class="form-email-compose" method="get" action="inbox.html">
        <div class="form-group">
            <input type="email" id="input-to" placeholder="To" class="input-transparent form-control"
                   value="<%= receiver %>">
        </div>
        <div class="form-group">
            <input type="text" id="input-subject" placeholder="Subject" class="input-transparent form-control"
                   value="<%= subject %>">
        </div>
        <div class="form-group">
            <textarea rows="10" class="form-control" id="wysiwyg" placeholder="Message"><%- body %></textarea>
        </div>
        <div class="clearfix">
            <div class="btn-toolbar pull-xs-right">
                <button type="reset" id="compose-discard-button" class="btn btn-gray">Discard</button>
                <button type="button" id="compose-save-button" class="btn btn-gray">&nbsp;&nbsp;Save&nbsp;&nbsp;</button>
                <button type="submit" id="compose-send-button" class="btn btn-danger">&nbsp;&nbsp;&nbsp;Send&nbsp;&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</script>

<script type="text/template" id="email-list-view-header-template">
    <div class="row">
        <div class="col-sm-6">
            <div class="btn-group">
                <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" data-toggle="dropdown">
                    Select
                    <i class="fa fa-angle-down "></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" id="select-all" href="#">All</a></li>
                    <li><a class="dropdown-item" id="select-none" href="#">None</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" id="select-read" href="#">Read</a></li>
                    <li><a class="dropdown-item" id="select-unread" href="#">Unread</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <a class="btn btn-sm btn-secondary dropdown-toggle" href="#" data-toggle="dropdown">
                    Actions
                    <i class="fa fa-angle-down "></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" id="reply" href="#">Reply</a></li>
                    <li><a class="dropdown-item" id="forward" href="#">Forward</a></li>
                    <li><a class="dropdown-item" id="archive" href="#">Archive</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" id="mark-as-read" href="#">Mark As Read</a></li>
                    <li><a class="dropdown-item" id="mark-as-unread" href="#">Mark As Unread</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" id="delete" href="#">Delete</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <input class="form-control form-control-sm width-200 pull-xs-right" id="mailbox-search" type="text" placeholder="Search Messages">
        </div>
    </div>
</script>
</body>
</html>