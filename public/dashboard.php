<?php
include_once __DIR__ .'/../includes/session_start.php';
include_once __DIR__ . '/../includes/db_connection.php';
include_once __DIR__ .'/../includes/database_function.php';
include_once __DIR__.'/../template/dashboard.html.php';
try {
  include_once __DIR__ . '/../includes/db_connection.php';
  $output = 'Database connection established.';
  if (!isset($_SESSION['id']))
  header('location: /login.php');
  $stmt = $pdo->prepare('SELECT * FROM user');
    $user = $stmt->fetch();
 $name =$_SESSION['name'];

 echo'Hello, '.$name;
  $product = $pdo->prepare(("SELECT * FROM auction where user = '{$_SESSION['name']}'"));
  $product->execute();
   //var_dump( $product->fetchAll());
   $result=$product->fetchAll();
  $i=0;
 while($i<sizeof($result)){
 echo'
  <tr>
  <td>'.$result[$i]['title'].'</td>
  <td>'.$result[$i]['Product_category'].'</td>
  <td>'.$result[$i]['description'].'</td>
  <td>'.$result[$i]['product_details'].'</</td>
  <td>'.$result[$i]['date'].'</td>
  <td>'.$result[$i]['endDate'].'</td>
  <td><a href="/addAuction.php">Add new</a></td>
  <td><a href="/editAuction.php?id='.$result[$i]['idProducts'].'">Edit this </a></td>
  <td>'.$result[$i]['user'].'</td>
  </tr>
 
 ';
 $i++;

}
echo' </tbody>
</table>';
  
 echo '<a href="logout.php"> logout </a>'; 
 echo '<hr><br><p>Note: if you cant see any data, it means you dont have any present auctions</p><hr>';

 echo $output;

// echo'No entry made by this user';

 } catch (PDOException $e) {
echo 'Unable to connect to the database server: ' . $e->getMessage();
  }
