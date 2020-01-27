<?php


$page = $_SERVER['REQUEST_URI'];
$page = ltrim($page, '/');
$page = rtrim($page, '/');
$page = str_replace("/", "-", $page);

if(empty($page)){
    $page = 'index';
}


?>


<html>

<head>
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1.0; user-scalable=false;" />
    <title>Meonc Studio</title>
    <link rel="stylesheet" type="text/css" href="/spectre.css" />
    <link rel="stylesheet" type="text/css" href="/spectre-exp.css" />
    <link rel="stylesheet" type="text/css" href="/fabric-icon.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&display=swap" rel="stylesheet"> 
    <style>
        body{
            font-family: 'Montserrat', sans-serif;
            font-weight: 300;
            color: rgba(199, 199, 199)
        }

        .bg{
            position: fixed;
            background-color: #232323;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 100%;
            z-index: -99999;
        }

        .hero{
            height: 100%;
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }

        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .hero .title{
            font-weight: 600;
            color: #fff;
            font-size: 24px;
            text-align: center;
            width: 100%;
        }

        .hero .icon{
            height: 100px;
            min-width: 100px;
            background-image: url('icon-white.svg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center center;
            margin-bottom: 20px;
        }

        .copyright{
            position: absolute;
            bottom: 0px;
            width: 100%;
            left: 0px;
            text-align: center;
            font-size: 10px;
            padding: 15px;
        }

        .navbar{
            position: absolute;
            width: 100%;
            height: 60px;
            padding: 0px 5px;
            background-color: #232323;
        }

        .navbar .navbar-section{
            height: 100%;
            padding: 0px 10px;
        }

        .navbar .icon{
            height: 100%;
            width: 25px;
            fill: #fff !important;
            filter: invert(100%);
            margin: 0px;
            padding: 0px;
        }

        .navbar .ms-Icon{
            font-size: 20px;
        }

        h1, h2, .h1, .h2{
            font-weight: 600;
        }

        h3, h4, .h3, .h4{
            font-weight: 400;
        }
    </style>
</head>

<body>

    <div class="bg"></div>

    <header class="navbar">
        <section class="navbar-section">
            <a href="/" class="btn btn-link"><i class="ms-Icon ms-Icon--HomeSolid"></i></a>
            <a href="project/" class="btn btn-link"><i class="ms-Icon ms-Icon--OfficeAddinsLogo"></i></a>
        </section>
        <section class="navbar-center">
        </section>
        <section class="navbar-section">
            <a href="http://jimschenchen.com" target="_blank" class="btn btn-link">JM</a>
            <a href="https://www.cloudyyoung.com" target="_blank" class="btn btn-link">CY</a>
            <a href="https://github.com/MeoncStudio" target="_blank" class="btn btn-link"><img class="icon" src="/github-logo.svg"></svg></a>
        </section>
    </header>

<?php

if(file_exists("pages/$page.php")){
    require 'pages/' . $page . '.php';
}else{
    require 'pages/404.php';
}

?>


    <div class="copyright">
        &copy; 2020 All rights reserved.
    </div>

</body>
</html>