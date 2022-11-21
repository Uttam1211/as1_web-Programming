<?php

include_once __DIR__ .'/../includes/session_start.php';
include_once __DIR__ . '/../includes/db_connection.php';
include_once __DIR__ .'/../includes/database_function.php';

try{
  include_once __DIR__ . '/../includes/db_connection.php';
  $output = 'Database connection established.';
  

 /*  $sql_categories = "CREATE TABLE `assignment1`.`categories` (
    `category_id` VARCHAR(255) NOT NULL ,
    `name` VARCHAR(45) NULL,
    `add_date` DATE,
    PRIMARY KEY (`category_id`))";

$Sql_products = "CREATE TABLE `assignment1`.`products` (
    `idproducts` VARCHAR(255) NOT NULL,
    `category_id` VARCHAR(255) NOT NULL ,
    `add_date` DATE,
    `product_name` VARCHAR(255) NULL,
    PRIMARY KEY (`idproducts`))"; */
/* $pdo->exec($sql_categories);
$pdo->exec($Sql_products); */

$navi = $pdo->prepare(('SELECT name FROM categories'));
$navi->execute();
$result=$navi->fetchAll(PDO::FETCH_COLUMN, 0);

  for($i=0; $i<sizeof($result); $i++){
    if($i<=2)
echo  '
				<li><a class="categoryLink" href="/index.php?go='.$result[$i].'">'.$result[$i].'</a></li>
';
  }?>
  <li><a class="categoryLink" href="">More</a>
<ul class=menu>
<?php
for($i=0; $i<sizeof($result); $i++){
  if($i>2)
  echo '<li><a class="categoryLink"href="/index.php?go='.$result[$i].'">'.$result[$i].'</a></li></u></li>';
}

}
  catch (PDOException $e) {
echo 'Unable to connect to the database server: ' . $e->getMessage();
  }

  echo $output;




//inseting 
//see youtube video, assignmnet criteria