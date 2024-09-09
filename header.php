<?php
session_start();

if(empty($_SESSION['id']))
    $_SESSION['id'] = session_id();

// echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schooser</title>
    <script src="<?php echo $include_path ?>Asset/Js/Lib/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $include_path ?>Asset/Js/Lib/axios.min.js" type="text/javascript"></script>
    <script src="<?php echo $include_path ?>Asset/Js/func.js" type="text/javascript"></script>
    <script src="<?php echo $include_path ?>Asset/Js/menu.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo $include_path ?>Asset/Scss/App.css">
    <link rel="stylesheet" href="<?php echo $include_path ?>Asset/Scss/App.css.map">
    <script src="https://kit.fontawesome.com/9f734b8043.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <nav class="nav-bar">
        <div class="menu-title"><a href="<?php echo $include_path ?>">Schooser</a></div>
        <div class="menu-toggler" data-target="menu-list">
            <i class="fa-solid fa-bars" id="menu-bar"></i>
            <i class="fa-solid fa-minus" id="menu-x" style="display: none;"></i>
        </div>
        <ul class="menu-list" id="menu-list" style="display: none;">
            <li><a href="<?php echo $include_path ?>View/Login/">Login</a></li>
            <li><a href="<?php echo $include_path ?>View/Register/">Register</a></li>
            <li><a href="<?php echo $include_path ?>View/Profile/">Profilo</a></li>
            <li><a href="<?php echo $include_path ?>View/Whay/">Perché</a></li>
        </ul>
    </nav>
</div>
<div class="container">