<?php
include_once __DIR__ .'/../includes/session_start.php';
include_once __DIR__ . '/../includes/db_connection.php';
include_once __DIR__ .'/../includes/database_function.php';
try {
  include_once __DIR__ . '/../includes/db_connection.php';
  // echo' <b><marquee> Database connection established.</b></marquee>';
  }
  catch (PDOException $e) {
echo 'Unable to connect to the database server: ' . $e->getMessage();
  }
  


if(isset($_POST['submit'])){

$sql=$pdo->prepare( 'INSERT INTO user (username, password, first_name, email, last_name)
VALUES (:username, :password, :first_name, :email, :last_name)
');

$values = [
  'username' => $_POST['username'],
  'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
  'first_name'=>$_POST['first_name'],
  'email'=>$_POST['email'],
  'last_name'=>$_POST['last_name']
];

$sql->execute($values);

header('refresh:2; url:login.php');
echo'<p>Registartion successful, please log in now ...... </p><hr>';
echo '<a href=/login.php> Login <//a>';
}
else{
  include_once __DIR__.'/../template/register.html.php';
}
