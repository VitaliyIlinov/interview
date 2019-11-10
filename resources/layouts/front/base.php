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
    <link href="/front/css/main.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <nav class="col-xl-2 col-lg-3 col-md-4 sidebar">
                <div class="nav-wrapper">
                    <?php require_once resource_path('helpers/front/catalogs.php'); ?>
                </div>
            </nav>


            <main class="col-xl-10 col-lg-9 col-md-8 bg-light">
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
<script src="/libs/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="/libs/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
<script src="/libs/highlightjs/highlight.pack.js"></script>
<script src="/front/js/main.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
