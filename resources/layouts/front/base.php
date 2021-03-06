<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Vitaliy Ilinov">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Study</title>
    <link href="/libs/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/libs/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="/libs/highlightjs/styles/darkula.css" rel="stylesheet">
    <link href="/libs/animate/animate.css" rel="stylesheet">
    <link href="/libs/toastr/build/toastr.css" rel="stylesheet" type="text/css"/>
    <link href="/front/css/main.css" rel="stylesheet">
    <link href="/front/css/media.css" rel="stylesheet">
    <script src="/libs/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark d-sm-none d-md-flex fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?= url()->route('dashboard') ?>">
                <i class="fa fa-user"></i>
                <span class="d-none d-lg-inline-block">Admin panel</span>
            </a>
        </li>
    </ul>
</nav>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-xl-2 navbar-expand-md navbar-dark sidebar">
                <div class="nav-wrapper">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#catalog" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="nav-link d-none d-sm-block d-md-none float-right" href="<?= url()->route('dashboard') ?>">
                        <i class="fa fa-user"></i>
                    </a>
                    <?php require_once resource_path('helpers/front/catalogs.php'); ?>
                </div>
            </nav>


            <main class="offset-md-3 offset-xl-2 col-md-9 col-xl-10 bg-light">
                <div class="main-wrapper">
                    <?php require_once $view; ?>
                </div>
            </main>

        </div>
    </div>
</div>
<footer>
    <div class="container">
        <p class="text-center">&copy; Company 2017-2019</p>
    </div>
</footer>
<?php if (!empty($isEditor)) : ?>
    <?= \app\support\Facades\EditorWidget::render($this->getView()); ?>
<?php endif; ?>
<script src="/libs/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
<script src="/libs/highlightjs/highlight.pack.js"></script>
<script src="/libs/toastr/build/toastr.min.js"></script>
<script src="/front/js/main.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
