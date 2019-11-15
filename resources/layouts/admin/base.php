<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/libs/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/fonts/circular-std/style.css">
    <link rel="stylesheet" href="/admin/css/style.css">
    <link rel="stylesheet" href="/libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/libs/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/libs/fonts/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/libs/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/libs/animate/animate.css">

    <script src="/libs/jquery-3.4.1.min.js"></script>
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>

<div class="dashboard-main-wrapper">
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php require_once resource_path('helpers/admin/catalogs.php');?>
                </div>
            </nav>
        </div>
    </div>

    <div class="dashboard-wrapper">
        <?php require resource_path('helpers/admin/header.php'); ?>
        <?php require_once $view; ?>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        Copyright © 2018 Concept. All rights reserved. Dashboard by
                        <a href="https://colorlib.com/wp/">Colorlib</a>
                        .
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="/libs/bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
<script src="/libs/slimscroll/jquery.slimscroll.js"></script>
<script src="/libs/sortable/sortable.min.js"></script>
<script src="/admin/js/main.js"></script>
</body>

</html>