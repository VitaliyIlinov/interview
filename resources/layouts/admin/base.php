<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/libs/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/fonts/circular-std/style.css">
    <link rel="stylesheet" href="/admin/css/style.css">
    <link rel="stylesheet" href="/libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/libs/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="/libs/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="/libs/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/libs/charts/c3charts/c3.css">
    <link rel="stylesheet" href="/libs/fonts/flag-icon-css/flag-icon.min.css">
    <base target="_blank" href="admin_panel/">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>

<div class="dashboard-main-wrapper">

    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="index.html">Concept</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item">
                        <div id="custom-search" class="top-search-bar">
                            <input class="form-control" type="text" placeholder="Search..">
                        </div>
                    </li>
                    <li class="nav-item dropdown notification">
                        <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span
                                    class="indicator"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                            <li>
                                <div class="notification-title"> Notification</div>
                                <div class="notification-list">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img">
                                                    <img src="/img/avatar-2.jpg" alt=""
                                                         class="user-avatar-md rounded-circle">
                                                </div>
                                                <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">Jeremy Rakestraw</span>accepted
                                                    your invitation to join the team.
                                                    <div class="notification-date">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img">
                                                    <img src="/img/avatar-3.jpg" alt=""
                                                         class="user-avatar-md rounded-circle">
                                                </div>
                                                <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">John Abraham </span>is
                                                    now following you
                                                    <div class="notification-date">2 days ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img">
                                                    <img src="/img/avatar-4.jpg" alt=""
                                                         class="user-avatar-md rounded-circle">
                                                </div>
                                                <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">Monaan Pechi</span> is
                                                    watching your main repository
                                                    <div class="notification-date">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img">
                                                    <img src="/img/avatar-5.jpg" alt=""
                                                         class="user-avatar-md rounded-circle">
                                                </div>
                                                <div class="notification-list-user-block"><span
                                                            class="notification-list-user-name">Jessica Caruso</span>accepted
                                                    your invitation to join the team.
                                                    <div class="notification-date">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list-footer">
                                    <a href="#">View all notifications</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown connection">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-th"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                            <li class="connection-list">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item">
                                            <img src="/img/github.png" alt="">
                                            <span>Github</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item">
                                            <img src="/img/dribbble.png" alt="">
                                            <span>Dribbble</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item">
                                            <img src="/img/dropbox.png" alt="">
                                            <span>Dropbox</span></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item">
                                            <img src="/img/bitbucket.png" alt="">
                                            <span>Bitbucket</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item">
                                            <img src="/img/mail_chimp.png" alt="">
                                            <span>Mail chimp</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item">
                                            <img src="/img/slack.png" alt="">
                                            <span>Slack</span></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="conntection-footer">
                                    <a href="#">More</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="/img/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                             aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                <span class="status"></span><span class="ml-2">Available</span>
                            </div>
                            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">Menu</li>

                        <?php require resource_path('catalogs/admin.php'); ?>

                        <li class="nav-divider">
                            Features
                        </li>

                        <?php
                        $menu = $feature;
                        require resource_path('catalogs/admin.php');
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="dashboard-wrapper">
        <?php require_once $view; ?>
    </div>

</div>

<script src="/libs/jquery-3.4.1.min.js"></script>
<script src="/libs/bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
<script src="/libs/slimscroll/jquery.slimscroll.js"></script>
<script src="/libs/charts/chartist-bundle/chartist.min.js"></script>
<script src="/libs/charts/sparkline/jquery.sparkline.js"></script>
<script src="/libs/charts/morris-bundle/raphael.min.js"></script>
<script src="/libs/charts/morris-bundle/morris.js"></script>
<script src="/libs/charts/c3charts/c3.min.js"></script>
<script src="/libs/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="/libs/charts/c3charts/C3chartjs.js"></script>
<script src="/admin/js/main.js"></script>
</body>

</html>