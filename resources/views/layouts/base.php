<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Vitaliy Ilinov">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Study</title>

    <!-- Bootstrap core CSS -->
    <link href="/libs/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/libs/highlightjs/styles/darkula.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main role="main" style="padding-top: 5rem;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4">

                <ul class="list-group" id="catalog">
                    <li class="list-group-item">
                        <a href="#solid" class="btn btn-outline-primary">Solid</a>
                        <ul id="solid">
                            <li class="list-group-item">
                                <a href="/solid/single_responsibility" class="btn-outline-primary">Single
                                    Responsibility
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="/solid/openclosed" class="btn-outline-primary">Open-closed</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/solid/liskov_barbara" class="btn-outline-primary">Liskov substitution</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/solid/interface_segregation" class="btn-outline-primary">Interface
                                    segregation
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="/solid/dependency_inversion" class="btn-outline-primary">Dependency inversion
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a href="#php" class="btn btn-outline-primary">PHP</a>
                        <ul id="php">
                            <li class="list-group-item">
                                <a href="/php/class_object_oop" class="btn-outline-primary">Класс,Обьекты,ООП</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a href="#mysql" class="btn btn-outline-primary">MYSQL</a>
                        <ul id="mysql">
                            <li class="list-group-item">
                                <a href="/mysql/engine" class="btn-outline-primary">Движки</a>
                                <a href="/mysql/indexes" class="btn-outline-primary">Индексы</a>
                                <a href="/mysql/relation_type" class="btn-outline-primary">Типы связей</a>
                                <a href="/mysql/useful_information" class="btn-outline-primary">Полезная инфа</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a href="#pattern" class="btn btn-outline-primary">Patterns</a>
                        <ul id="pattern">
                            <li class="list-group-item">
                                <a href="#first" class="btn-outline-primary">Single Responsibility</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#second">Open-closed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a href="#git">Git</a>
                    </li>
                </ul>
            </div>

            <div class="col-xl-10 col-lg-9 col-md-8">
                <?php include $view; ?>
            </div>
        </div>
    </div>
</main>
<footer class="container">
    <p class="text-center">&copy; Company 2017-2019</p>
</footer>
<script src="/libs/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="/libs/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
<script src="/libs/highlightjs/highlight.pack.js"></script>
<script src="/js/main.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
