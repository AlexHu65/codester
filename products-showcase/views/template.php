<?php

session_start();

$config = [
    'backend' => routing::selectRouteBackEnd(),
    'frontend' => routing::selectRouteFrontEnd(),
    'ctrTemplate' => templateController::ctrStyleTemplate(),
    'categories' => productsController::ctrCategories(),
    'slide' => slideController::ctrGetSlide()
];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/plugins/flexslider.css">
    <title>Products showcase</title>
</head>
<body>

<div class="container-fluid barraProductos">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12 ordenarProductos">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        Order products <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <?php
                        echo '<li><a href="' . $config['frontend'] . $paths[0] . '/1/reciente">Recientes</a></li>
                        <li><a href="' . $config['frontend'] . $paths[0] . '/1/antiguo">Antiguo</a></li>';
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/plantilla.js" type="application/javascript"></script>
<script src="js/plugins/jquery.min.js"></script>
<script src="js/plugins/jquery.easing.js"></script>
<script src="js/plugins/jquery.scrollUp.js"></script>
<script src="js/plugins/jquery.flexslider.js"></script>
<script src="js/search.js"></script>
</body>
</html>