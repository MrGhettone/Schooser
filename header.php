<?php
include_once $_ENV['dir'].'Asset/Api/include.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schooser</title>
    <script src="<?php echo $_ENV['dir'] ?>Asset/Js/Lib/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $_ENV['dir'] ?>Asset/Js/Lib/axios.min.js" type="text/javascript"></script>
    <script src="<?php echo $_ENV['dir'] ?>Asset/Js/var.js" type="text/javascript"></script>
    <script src="<?php echo $_ENV['dir'] ?>Asset/Js/func.js" type="text/javascript"></script>
    <script src="<?php echo $_ENV['dir'] ?>Asset/Js/menu.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo $_ENV['dir'] ?>Asset/Scss/App.css">
    <link rel="stylesheet" href="<?php echo $_ENV['dir'] ?>Asset/Scss/App.css.map">
    <script src="https://kit.fontawesome.com/9f734b8043.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <nav id="nav-bar">
        <div id="menu-title"><a href="<?php echo $_ENV['dir'] ?>" class="menu-text">Schooser</a></div>
        <div id="menu-toggler" class="middle-show" data-target="menu-list"  style="display: none;">
            <i class="fa-solid fa-bars middle-show menu-text" id="menu-bar"></i>
            <i class="fa-solid fa-minus middle-hide menu-text" id="menu-x" style="display: none;"></i>
        </div>
        <div id="menu-list" class="middle-hide">
            <ul>
                <li><a href="<?php echo $_ENV['dir'] ?>View/Login/" class="menu-text">Login</a></li>
                <li><a href="<?php echo $_ENV['dir'] ?>View/Register/" class="menu-text">Register</a></li>
                <li><a href="<?php echo $_ENV['dir'] ?>View/Profile/" class="menu-text">Profilo</a></li>
                <li><a href="<?php echo $_ENV['dir'] ?>View/Whay/" class="menu-text">Perché</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">