<?php
include_once __DIR__ .'/../includes/session_start.php';
include_once __DIR__ . '/../includes/db_connection.php';
include_once __DIR__ .'/../includes/database_function.php';

try {
  include_once __DIR__ . '/../includes/db_connection.php';
  $output = 'Database connection established.';

  if(isset($_POST['submit'])){
    $stmt = $pdo->prepare('SELECT * FROM admin WHERE admin_username = :admin_username');
    $values = [
      'admin_username' => $_POST['admin_username'],
    ];
    $stmt->execute($values);
    $user = $stmt->fetch();
    if ($_POST['admin_password']=="admin") {
      $_SESSION['loggedin'] = $user['admin_id'];
      header('location:/admin_dashboard.php');
    }else {
      echo '<br>Sorry, your account could not be found';
    }
  }
  else{
    include_once __DIR__ . '/../template/admin/admin_login.html.php';
  }
  }
  catch (PDOException $e) {
echo 'Unable to connect to the database server: ' . $e->getMessage();
  }
  echo $output;





