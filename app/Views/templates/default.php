<!DOCTYPE html>
<html>

<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title><?= App::getInstance()->title; ?></title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="myAdmin - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="./fonts/icomoon/icomoon.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" type="text/css" href="./js/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="./js/plugins/magnific/magnific-popup.css">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="./js/plugins/c3charts/c3.min.css">
    <link rel="stylesheet" type="text/css" href="./js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- CSS - theme -->
    <!-- <link rel="stylesheet" type="text/css" href="./skin/default_skin/css/theme.css"> -->
    <link rel="stylesheet" type="text/css" href="./skin/default_skin/less/theme.min.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="./allcp/forms/css/forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/favicon.png">

    <!-- IE8 HTML5 support  -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page">

<!-- Body Wrap  -->
<div id="main">

    <!-- Header  -->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-logo-wrapper dark bg-dark">
            <a class="navbar-logo-image" href="index.html">
                <img src="./img/logo.png" alt="" class="sb-l-o-logo">
                <img src="./img/logo_small.png" alt="" class="sb-l-m-logo">
            </a>
        </div>
        <span id="sidebar_left_toggle" class="ad ad-lines navbar-nav navbar-left"></span>
        <form class="navbar-form navbar-left search-form square" role="search">
            <div class="input-group add-on">

                <input type="text" class="form-control" placeholder="Search" onfocus="this.placeholder=''"
                       onblur="this.placeholder='Search'">

                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>

            </div>
        </form>
        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown dropdown-fuse hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="dropdown-menu w230" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-fuse">
                <a href="#" class="dropdown-toggle mln" data-toggle="dropdown">
                    <span class="hidden-xs hidden-sm"><span class="name">John Iverson</span> </span>
                    <span class="fa fa-caret-down hidden-xs hidden-sm"></span>
                    <span class="profile-online">
                        <img src="./img/avatars/74x74.png" alt="avatar">
                    </span>
                </a>
                <ul class="dropdown-menu list-group keep-dropdown w190" role="menu">
                    <li class="list-group-item"><a href="#">Profile <span class="fa fa-user"></span></a></li>
                    <li class="list-group-item"><a href="#">Settings <span class="fa fa-cog"></span></a></li>
                    <li class="list-group-item"><a href="#">My Calendar <span class="fa fa-calendar-o"></span></a></li>
                    <li class="divider"></li>
                    <li class="list-group-item"><a href="#">Help <span class="fa fa-question-circle"></span></a></li>
                    <li class="list-group-item"><a href="#">Logout <span class="fa fa-sign-out"></span></a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right mr25">
            <li class="dropdown dropdown-fuse ml20">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn dropdown-toggle">
                        <span class="fa fa-envelope fs16"></span>
                    </button>
                    <button data-toggle="dropdown" class="btn dropdown-toggle bg-color-1 fs10 visible-xl">
                        3
                    </button>
                    <div class="dropdown-menu keep-dropdown w370 animated animated-shorter activity-container fadeIn" role="menu">
                        <div class="panel mbn">
                            <div class="activity-content">
                                <div class="panel-menu">
                                    <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                        <a href="#nav-tab1" data-toggle="tab" class="btn active">Notifications</a>
                                        <a href="#nav-tab2" data-toggle="tab" class="btn br-l-n br-r-n">Messages</a>
                                        <a href="#nav-tab3" data-toggle="tab" class="btn ">Activity</a>
                                    </div>
                                </div>
                                <div class="panel-body pn">
                                    <div class="tab-content br-n pn">
                                        <div id="nav-tab1" class="tab-pane scroller-navbar alerts-widget active" role="tabpanel">
                                            <div class="media">
                                                <a class="media-left bg-success" href="#">
                                                    <span class="imoon imoon-user2"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Registration</h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Confirm?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-system" href="#">
                                                    <span class="imoon imoon-tag"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Order</h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response text-right"> Moderate?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-system">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-info" href="#">
                                                    <span class="glyphicon glyphicon-comment"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Comment</h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-info">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-warning" href="#">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Review</h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-warning">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-system" href="#">
                                                    <span class="imoon imoon-tag"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Order</h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response text-right"> Moderate?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-system">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-info" href="#">
                                                    <span class="glyphicon glyphicon-comment"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Comment</h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-info">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-warning" href="#">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Review</h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-warning">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab2" class="tab-pane scroller-navbar chat-widget" role="tabpanel">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="./img/avatars/58x58.png">
                                                    </a>
                                                </div>
                                                <div class="media-body bg-success">
                                                    <h5 class="media-heading">Paul Pirce 1:25am</h5>
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body bg-info">
                                                    <h5 class="media-heading">Monica Smith 1:25am</h5>
                                                    Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                    erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="./img/avatars/58x58.png">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="./img/avatars/58x58.png">
                                                    </a>
                                                </div>
                                                <div class="media-body bg-success">
                                                    <h5 class="media-heading">Paul Pirce 1:25am</h5>
                                                    Lorem ipsum dolor sit amet, nonummy nibh euismod tinc consectetuer
                                                    adipiscing elit.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body bg-info">
                                                    <h5 class="media-heading">Monica Smith 1:25am</h5>
                                                    Euismod sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                    aliquam erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="./img/avatars/58x58.png">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="./img/avatars/58x58.png">
                                                    </a>
                                                </div>
                                                <div class="media-body bg-success">
                                                    <h5 class="media-heading">Paul Pirce 1:25am</h5>
                                                    Corem ipsum dolor sit amet, nonummy nibh euismod tinc co.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body bg-info">
                                                    <h5 class="media-heading">Monica Smith 1:25am</h5>
                                                    Ubh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="./img/avatars/58x58.png">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab3" class="tab-pane scroller-navbar activity-widget" role="tabpanel">
                                            <ul class="media-list" role="menu">
                                                <li class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="./img/avatars/58x58.png" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="" href="#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="./img/avatars/58x58.png" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="" href="#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="./img/avatars/58x58.png" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="" href="#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="./img/avatars/58x58.png" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="" href="#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="./img/avatars/58x58.png" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="" href="#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="./img/avatars/58x58.png" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="" href="#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="./img/avatars/58x58.png" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="" href="#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="./img/avatars/58x58.png" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="" href="#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-center">
                                    <a href="#" class="btn fw600"> View All </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn dropdown-toggle">
                        <span class="fa fa-bell fs16"></span>
                    </button>
                    <button data-toggle="dropdown" class="btn dropdown-toggle fs10 bg-color-2 visible-xl">
                        8
                    </button>
                    <div class="dropdown-menu keep-dropdown w370 animated animated-shorter fadeIn activity-container timeline-container" role="menu">
                        <div class="panel activity-content mbn">
                            <div class="panel-menu">
                                <span class="panel-title fw600"> Activity reports</span>
                            </div>
                            <div class="panel-body scroller-navbar pn">
                                <ol class="timeline-list">
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>John Doe</b>
                                            Sent you a message.
                                            <a href="#">View now</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b>
                                            created invoice:
                                            <a href="#">iPad Air</a>
                                        </div>
                                        <div class="timeline-date">9:59am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b>
                                            created invoice:
                                            <a href="#">iPhone 6s</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Lara Johnes</b> Sent you a message.
                                            <a href="#">View now</a>
                                        </div>
                                        <div class="timeline-date">3:18pm</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>John Doe</b>
                                            Sent you a message.
                                            <a href="#">View now</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b>
                                            created invoice:
                                            <a href="#">iPad Air</a>
                                        </div>
                                        <div class="timeline-date">9:59am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b>
                                            created invoice:
                                            <a href="#">iPhone 6s</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Lara Johnes</b> Sent you a message.
                                            <a href="#">View now</a>
                                        </div>
                                        <div class="timeline-date">3:18pm</div>
                                    </li>
                                </ol>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="#" class="btn"> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right mr5">
            <li class="dropdown dropdown-fuse hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">English
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">English</a></li>
                    <li><a href="#">Spanish</a></li>
                    <li><a href="#">Turkish</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- /Header  -->

    <!-- Sidebar  -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- Sidebar Left Wrapper  -->
        <div class="sidebar-left-content nano-content">

            <!-- Sidebar Header -->
            <header class="sidebar-header">

                <!-- Sidebar - Author -->
                <div class="sidebar-widget author-widget">
                    <div class="media">
                        <a class="media-left profile-online" href="#">
                            <img src="./img/avatars/74x74.png" class="img-responsive" alt="">
                        </a>

                        <div class="media-body">
                            <div>Welcome</div>
                            <div class="media-author">John Iverson</div>
                        </div>
                    </div>
                </div>

            </header>
            <!-- /Sidebar Header -->

            <!-- Sidebar Menu  -->
            <ul class="nav sidebar-menu">
                <li class="active">
                    <a href="index.html">
                        <span class="sidebar-title">Dashboards</span>
                        <span class="sb-menu-icon fa fa-home"></span>
                    </a>
                </li>
                <li>
                    <a class="new-email" href="email-layouts.html">
                        <span class="sidebar-title">New Emails</span>
                        <span class="sb-menu-icon fa fa-envelope"></span>
                    </a>
                </li>
                <li>
                    <a href="basic-calendar.html">
                        <span class="sidebar-title">Calendar</span>
                        <span class="sb-menu-icon fa fa-calendar"></span>
                    </a>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">Forms</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-list-ul"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li><a href="forms-elements.html">Elements</a></li>
                        <li><a href="forms-widgets.html">Widgets</a></li>
                        <li><a href="forms-layouts.html">Layouts</a></li>
                        <li><a href="forms-wizard.html"> Wizard</a></li>
                        <li><a href="forms-validation.html">Validation</a></li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">Sales stats</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li><a href="dashboard2.html">Overview</a></li>
                        <li><a href="sales-stats-products.html">Products</a></li>
                        <li><a href="sales-stats-purchases.html">Purchases</a></li>
                        <li><a href="sales-stats-clients.html">Clients</a></li>
                        <li><a href="sales-stats-general-settings.html">General Settings</a></li>
                    </ul>
                </li>


                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">Layout Templates</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-desktop"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a class="accordion-toggle" href="#"> Sidebars <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="sidebar-left-static.html">Left Static</a></li>
                                <li><a href="sidebar-left-fixed.html">Left Fixed</a></li>
                                <li><a href="sidebar-left-minified.html">Left Minified</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#"> Navigation <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="navigation-static.html">Static</a></li>
                                <li><a href="navigation-fixed.html">Fixed</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#"> Top Panel <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="top-panel.html">Default</a></li>
                                <li><a href="top-panel-menu.html">With Menu</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#"> Content <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="content-blank.html">Blank</a></li>
                                <li><a href="content-fixed.html">Fixed</a></li>
                                <li><a href="content-hero.html">Hero Content</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#"> Content Chutes <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="chute-left.html">Left Static</a></li>
                                <li><a href="chute-left-fixed.html">Left Fixed</a></li>
                                <li><a href="chute-right.html">Right Static</a></li>
                                <li><a href="chute-right-fixed.html">Right Fixed</a></li>
                                <li><a href="chute-both.html">Left &amp; Right Static</a></li>
                                <li><a href="chute-both-fixed.html">Left &amp; Right Fixed</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">Boxed Frontpage <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="boxed-default.html">Default</a></li>
                                <li><a href="horizontal-navigation-boxed.html">Optional Navigation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">Horizontal Navigation <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="horizontal-navigation-small-menu.html">Small Menu</a></li>
                                <li><a href="horizontal-navigation-medium-menu.html">Medium Menu</a></li>
                                <li><a href="horizontal-navigation-large-menu.html">Large Menu</a></li>
                                <li><a href="horizontal-navigation-top-panel.html">With Top panel</a></li>
                                <li><a href="horizontal-navigation-collapsing-top-panel.html">Collapsing Top panel</a></li>
                                <li><a href="horizontal-navigation-boxed.html">Boxed Layout</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">Management Tools</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-wrench"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li><a href="management-tools-panels.html">Panels</a></li>
                        <li><a href="management-tools-modals.html">Modals</a></li>
                        <li><a href="management-tools-dock.html">Dock</a></li>
                    </ul>
                </li>

                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">Widgets</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-cogs"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li><a href="widgets-panels.html">Panels</a></li>
                        <li><a href="widgets-scrollers-tiles.html">Scrollers &amp; Tiles</a></li>
                        <li><a href="widgets-tools.html">Tools</a></li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">User Interface</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-star-half-full "></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li><a href="user-interface-alerts.html">Alerts</a></li>
                        <li><a href="user-interface-buttons.html">Buttons</a></li>
                        <li><a href="user-interface-typography.html">Typography</a></li>
                        <li><a href="user-interface-panels.html">Panels</a></li>
                        <li><a href="user-interface-progress-bars.html">Progress Bars</a></li>
                        <li><a href="user-interface-tabs.html">Tabs</a></li>
                        <li><a href="user-interface-icons.html">Icons</a></li>
                        <li><a href="user-interface-grid.html">Grid</a></li>
                        <li><a href="user-interface-progress-loader.html">Page Progress Loader</a></li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">User Forms</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-tasks"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li><a href="user-forms-standart-inputs.html">Standart Inputs</a></li>
                        <li><a href="user-forms-additional-inputs.html">Additional Inputs</a></li>
                        <li><a href="user-forms-editors.html">Editors</a></li>
                        <li><a href="user-forms-treeview.html">Treeview</a></li>
                        <li><a href="user-forms-nestable.html">Nestable</a></li>
                        <li><a href="user-forms-image-tools.html">Image Tools</a></li>
                        <li><a href="user-forms-file-uploaders.html">File Uploaders</a></li>
                        <li><a href="user-forms-notifications.html">Notifications</a></li>
                        <li><a href="user-forms-content-sliders.html">Content Sliders</a></li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">Plugins</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-crop"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li><a class="accordion-toggle" href="#">Maps <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="maps-basic.html">Basic</a></li>
                                <li><a href="maps-vector.html">Vector</a></li>
                                <li><a href="maps-full.html">Full</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">Charts <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="charts-highcharts.html">Highcharts</a></li>
                                <li><a href="charts-d3.html">D3 Charts</a></li>
                                <li><a href="charts-flot.html">Flot Charts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">Tables <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="tables-basic.html">Basic</a></li>
                                <li><a href="tables-datatables.html">Data</a></li>
                                <li><a href="tables-sortable.html">Sortable</a></li>
                                <li><a href="tables-pricing.html">Pricing</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="sidebar-title">Pages</span>
                        <span class="caret"></span>
                        <span class="sb-menu-icon fa fa-file-text-o"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li><a class="accordion-toggle" href="#">Utility <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="utility-confirmation.html" target="_blank">Confirmation</a></li>
                                <li><a href="utility-login.html" target="_blank">Login</a></li>
                                <li><a href="utility-register.html" target="_blank">Register</a></li>
                                <li><a href="utility-forgot-password.html" target="_blank">Forgot Password</a></li>
                                <li><a href="utility-coming-soon.html" target="_blank">Coming Soon</a></li>
                                <li><a href="utility-404-error.html">404 Error</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#"> Basic <span class="caret"></span></a>
                            <ul class="nav sub-nav">
                                <li><a href="basic-search-results.html">Search Results</a></li>
                                <li><a href="basic-profile.html">Profile</a></li>
                                <li><a href="basic-timeline.html">Timeline</a></li>
                                <li><a href="basic-faq-page.html">FAQ Page</a></li>
                                <li><a href="basic-messages.html">Messages</a></li>
                                <li><a href="basic-gallery.html">Gallery</a></li>
                                <li><a href="basic-invoice.html">Invoice</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="doc/index.html">
                        <span class="sidebar-title">Documentation</span>
                        <span class="sb-menu-icon fa fa-book"></span>
                    </a>
                </li>

            </ul>
            <!-- /Sidebar Menu  -->

        </div>
        <!-- /Sidebar Left Wrapper  -->

    </aside>
    <!-- /Sidebar -->

    <!-- Main Wrapper -->
    <section id="content_wrapper">

        <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon"><a href="index.html"><span class="fa fa-home"></span></a></li>
                    <li class="breadcrumb-link"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-current-item">Dashboard</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <?= $content; ?>

            <!-- Column Center -->
        </section>
        <!-- /Content -->


    </section>
    <!-- /Main Wrapper -->

</div>
<!-- /Body Wrap  -->

<!-- Scripts -->

<!-- jQuery -->
<script src="./js/jquery/jquery-1.12.4.min.js"></script>
<script src="./js/jquery/jquery_ui/jquery-ui.min.js"></script>
<!-- <script src="./js/utility/fullscreen/jquery.fullscreen.js"></script> -->

<!-- HighCharts Plugin -->
<script src="./js/plugins/highcharts/highcharts.js"></script>
<script src="./js/plugins/c3charts/d3.min.js"></script>
<script src="./js/plugins/c3charts/c3.min.js"></script>

<!-- Simple Circles Plugin -->
<script src="./js/plugins/circles/circles.js"></script>

<!-- Maps JSs -->
<script src="./js/plugins/jvectormap/jquery.jvectormap.min.js"></script>
<script src="./js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script>

<!-- FullCalendar Plugin -->
<script src="./js/plugins/fullcalendar/lib/moment.min.js"></script>
<script src="./js/plugins/fullcalendar/fullcalendar.min.js"></script>

<!-- Date/Month - Pickers -->
<script src="./allcp/forms/js/jquery-ui-monthpicker.min.js"></script>
<script src="./allcp/forms/js/jquery-ui-datepicker.min.js"></script>

<!-- Magnific Popup Plugin -->
<script src="./js/plugins/magnific/jquery.magnific-popup.js"></script>

<!-- Theme Scripts -->
<script src="./js/utility/utility.js"></script>
<script src="./js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="./js/demo/demo.js"></script>
<script src="./js/main.js"></script>

<!-- Widget JS -->
<script src="./js/demo/widgets.js"></script>
<script src="./js/demo/widgets_sidebar.js"></script>
<script src="./js/pages/dashboard1.js"></script>
<!-- /Scripts -->

</body>

</html>