<?php
include_once __DIR__ .'/../includes/session_start.php';
include_once __DIR__ . '/../includes/db_connection.php';
include_once __DIR__ .'/../includes/database_function.php';

try {
  include_once __DIR__ . '/../includes/db_connection.php';
  $output = 'Database connection established.';
  if(isset($_POST['submit'])){
    $stmt = $pdo->prepare('SELECT * FROM user WHERE username = :username');
    $values = [
      'username' => $_POST['username'],
    ];
    $stmt->execute($values);
    $user = $stmt->fetch();
    if (password_verify($_POST['password'], $user['password'])) {
      $_SESSION['id'] = $user['id'];
      $_SESSION['name']=$user['first_name'];
      header('location:/dashboard.php');
    }else {
      
      include_once __DIR__ . '/../template/login.html.php';
      echo '<br>Sorry, your account could not be found, try again';

    }
  }
  else{
    include_once __DIR__ . '/../template/login.html.php';
  }


  echo '<br>'.$output;
  }
  catch (PDOException $e) {
echo 'Unable to connect to the database server: ' . $e->getMessage();
  }






