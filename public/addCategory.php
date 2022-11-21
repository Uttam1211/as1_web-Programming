<?php

include_once __DIR__ .'/../includes/session_start.php';
include_once __DIR__ . '/../includes/db_connection.php';
include_once __DIR__ .'/../includes/database_function.php';
include_once __DIR__.'/../template/layout.html.php';
try{
  include_once __DIR__ . '/../includes/db_connection.php';
  $output = 'Database connection established.';
  if (!isset($_SESSION['loggedin']))
  header('location: /login.php');

  $cat = $pdo->prepare(('SELECT name FROM categories '));
  $cat->execute();
  $result = $cat->fetchAll(PDO::FETCH_COLUMN, 0);

  if(isset($_POST['submit'])){
    $insert = $pdo->prepare('INSERT INTO categories (name) 
    VALUES(:name)
    ');
    
    $values = [
       'name'=>$_POST['name']
    ];
    $insert->execute($values);
    
    echo"product added successfully, pls navigate to home to view";
    
    }
    else{
        ?>
<center><h1>Add category</h1></center><hr>
<form 
style="display:flex;
flex-direction: column;
    align-items: center;"
action="" method="post">
  <label for=''>category Name</label>
  <input type="text" name="name">
  <input type="submit" value="Add" name="submit">



<?php



    }







} catch (PDOException $e) {
    echo 'Unable to connect to the database server: ' . $e->getMessage();
      }
    