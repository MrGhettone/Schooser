<?php
require_once $_ENV['basePath'].'Asset/Classes/autoload.php';

$_REQUEST = json_decode(file_get_contents('php://input'),true);
foreach(json_decode(file_get_contents('C:/Program Files/xampp/htdocs/Ciuser/Asset/Api/env.json'),true) as $key => $value)
    $_ENV[$key] = $value;

$DB = new DB($_ENV['server'],$_ENV['db'],$_ENV['dbLogin'],$_ENV['pwdLogin']);

session_start();
if(empty($_SESSION['id']))
    $_SESSION['id'] = session_id();