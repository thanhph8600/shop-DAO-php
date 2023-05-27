<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$CONTENT_URL?>/public/admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="//www.freepnglogos.com/uploads/php-logo-png/php-logo-php-elephant-logo-vectors-download-5.png">
    <title>
        Dashboard-PHT </title>
    <a href=""></a>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?=$CONTENT_URL?>/public/admin/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?=$CONTENT_URL?>/public/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?=$CONTENT_URL?>/public/admin/assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />

    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body class="g-sidenav-show  bg-gray-200">

<?php
    require 'menu.php';

    include $VIEW_NAME;
?>
