<?php
require_once '../Classes/autoload.php';

$body = file_get_contents('php://input');
$_REQUEST = json_decode($body,true);

$DB = new DB('localhost','ciuser','root','');

session_start();
if(empty($_SESSION['id']))
    $_SESSION['id'] = session_id();