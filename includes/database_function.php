<?php
include_once __DIR__ . '/db_connection.php';
include_once __DIR__.'/session_start.php';

$password = 1234;
$hash = password_hash($password, PASSWORD_DEFAULT);

password_verify($password, $hash); 

