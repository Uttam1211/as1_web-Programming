<?php
include_once __DIR__ .'/../includes/session_start.php';
include_once __DIR__ . '/../includes/db_connection.php';
include_once __DIR__ .'/../includes/database_function.php';
//include_once __DIR__.'/addAuction.php';
try {
  include_once __DIR__ . '/../includes/db_connection.php';
 echo $output = 'Database connection established.';
  if (!isset($_SESSION['id']))
  header('location: /login.php');
  include_once __DIR__.'/../template/layout.html.php';
  if(isset($_GET['id'])){
    $stmt = $pdo->prepare('SELECT * FROM auction WHERE idProducts= :id');
    $values = ['id' => $_GET['id']
    ];
    $stmt->execute($values);
    foreach($stmt as $auction){
?>
<center><h1>Edit Auctions</h1></center><hr>
<form 
style="display:flex;
flex-direction: column;
    align-items: center;"
action="" method="post">
  <label for=''>Title</label>
  <input type="text" name="title" value="<?php echo $auction['title']; ?>">
  <label for=''>Description</label>
  <input type="text" name="description"value="<?php echo $auction['description']; ?>">
  
 
<label for=''>Price</label>
  <input type="text" name="price"value="<?php echo $auction['price']; ?>">
  <label for=''>More details</label>
  <input type="text" name="MoreDetail"value="<?php echo $auction['product_details']; ?>">
  <label for=''>end date</label>
  <input type="datetime" name="endDate" placeholder="YYYY-MM-DD HH:MM:SS" value="<?php echo $auction['endDate']; }?>">
  <input type="submit" value="Submit" name="submit">

</form>
<?php include_once __DIR__.'/../template/footer.html.php';























}
}
























catch (PDOException $e) {
    echo 'Unable to connect to the database server: ' . $e->getMessage();
      }