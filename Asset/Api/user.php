<?php
header('Content-Type: application/json');
include 'include.php';

$user = new User();

$return_array = [];
switch($_REQUEST['request'])
{
    case 'login':
        $username = htmlspecialchars($_REQUEST['username']);
        $password = md5($_REQUEST['password']);
        $return_array = $user->login();
        break;
    case 'register':
        $username = htmlspecialchars($_REQUEST['username']);
        $email = htmlspecialchars($_REQUEST['email']);
        $password = '';
        if(!empty($_REQUEST['password']))
            $password = md5($_REQUEST['password']);
        $return_array = $user->register();
        break;
}

$DB->closeConn();
echo json_encode($return_array);