<?php
require_once '../Classes/autoload.php';

$DB = new DB('localhost','ciuser','root','');

// echo '<pre>'.print_r($DB,true).'</pre>';
// echo '<pre>'.print_r($DB->query("INSERT INTO users (username,email,password) VALUES ('test','test','test')"),true).'</pre>';
// echo '<pre>'.print_r($DB->query('DELETE FROM users WHERE id = 2'),true).'</pre>';
echo '<pre>'.print_r($DB->query("UPDATE users SET username = 'prova' WHERE id = 1"),true).'</pre>';
echo '<pre>'.print_r($DB->query('SELECT * FROM users'),true).'</pre>';