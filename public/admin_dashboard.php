<?php

include_once __DIR__ .'/../includes/session_start.php';
include_once __DIR__ . '/../includes/db_connection.php';
include_once __DIR__ .'/../includes/database_function.php';
include_once __DIR__.'/../template/layout.html.php';
try{
  include_once __DIR__ . '/../includes/db_connection.php';
  $output = 'Database connection established.';

?>
<a href="addCategory.php"><button style="width: 15em; height: 15em;">Add Category</button></a>

<a href="deleteCategory.php"><button style="width: 15em; height: 15em;">Delete Category</button></a>
<a href="addAdmin.php"><button style="width: 15em; height: 15em;">Add Admin</button></a>
<a href="EditCategory.php"><button style="width: 15em; height: 15em;">Edit Category</button></a>



<?php











} catch (PDOException $e) {
    echo 'Unable to connect to the database server: ' . $e->getMessage();
      }
    