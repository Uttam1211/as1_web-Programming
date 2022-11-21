<?php
include_once __DIR__ .'/../includes/session_start.php';
include_once __DIR__ . '/../includes/db_connection.php';
include_once __DIR__ .'/../includes/database_function.php';
try {
  include_once __DIR__ . '/../includes/db_connection.php';
 echo $output = 'Database connection established.';
  if (!isset($_SESSION['id']))
  header('location: /login.php');
  //used this query to array from :
  //https://www.php.net/manual/en/pdostatement.fetchall.php
  $cat = $pdo->prepare(('SELECT name FROM categories '));
$cat->execute();
$result = $cat->fetchAll(PDO::FETCH_COLUMN, 0);
//var_dump($result);
 
if(isset($_POST['submit'])){
$insert = $pdo->prepare('INSERT INTO auction (title, description, Product_category,price,product_details,endDate,user) 
VALUES(:title,:description,:category,:price,:MoreDetail,:endDate,:user)
');

$values = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'category' => $_POST['category'],
    'price' => $_POST['price'],
    'MoreDetail' => $_POST['MoreDetail'],
    'endDate' => $_POST['endDate'],
    'user' => $_SESSION['name']
];
$insert->execute($values);

echo"product added successfully, pls navigate to home to view";

}
else{
    include_once __DIR__.'/../template/add_auction.html.php';
}







}catch (PDOException $e) {
    echo 'Unable to connect to the database server: ' . $e->getMessage();
      }