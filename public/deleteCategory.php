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

  $cata = $pdo->prepare(('SELECT name FROM categories '));
  $cata->execute();
  $result = $cata->fetchAll(PDO::FETCH_COLUMN, 0);

  if(isset($_POST['submit'])){
    $delete = $pdo->query('Delete FROM categories where name = '.$_POST['name']);
    
    echo"product deleted successfully, pls navigate to home to view";
    
    }
    else{
        ?>
<center><h1>Delete category</h1></center><hr>
<form 
style="display:flex;
flex-direction: column;
    align-items: center;"
action="" method="post">
<select name="name">
      <option>--please choose an option--</option>
      <?php 
      for($i=0; $i<sizeof($result); $i++){
        echo 
        '<option value="'.$result[$i].'">'.$result[$i].'</option>
     ';
      }
      
    ?></select>


  <input type="submit" value="Delete" name="submit">



<?php



    }







} catch (PDOException $e) {
    echo 'Unable to connect to the database server: ' . $e->getMessage();
      }
   echo $output ;