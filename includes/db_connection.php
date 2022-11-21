<?php

// Establish a Database connection using PHP's PDO library.
try{
$pdo = new PDO('mysql:host=mysql;dbname=assignment1;charset=utf8mb4', 'student', 'student');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
    $e-> getMessage();
}