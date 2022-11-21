<?php

include_once __DIR__ .'/../includes/session_start.php';
include_once __DIR__ . '/../includes/db_connection.php';
include_once __DIR__ .'/../includes/database_function.php';

try{
  include_once __DIR__ . '/../includes/db_connection.php';
  $output = 'Database connection established.';
//sorting item categories by catrgory
if(isset($_GET['go'])){
echo'<h1> List by '.$_GET['go'].'</h1><hr><br>';
$stmt = $pdo->prepare('SELECT * FROM auction WHERE Product_category = :go');
$values = ['go' => $_GET['go']
];
$result=$stmt->execute($values);


foreach($stmt as $row){
    echo'
    <li>
       <img src='.$row['imgUrl'].' alt='.$row['title'].'>
               
                <article>
                       <h2>'.$row['title'].'</h2>
                       <h3>'.$row['Product_category'].'</h3>
                       <p>'.$row['description'].'</p>
   
                       <p class="price">Current bid: £'.$row['price'].'</p>
                       <a href="#" class="more auctionLink">More &gt;&gt;</a>
                   </article> </li>
   
   ';
}
}
else{
echo'<hr><h1><center>latest Auctions</center></h1><hr><br>';
  $product = $pdo->query(('SELECT * FROM auction ORDER BY date '));
  foreach($product as $row){
 echo'
 <li>
    <img src='.$row['imgUrl'].' alt='.$row['title'].'>
			
             <article>
					<h2>'.$row['title'].'</h2>
					<h3>'.$row['Product_category'].'</h3>
					<p>'.$row['description'].'</p>

					<p class="price">Current bid: £'.$row['price'].'</p>
					<a href="#" class="more auctionLink">More &gt;&gt;</a>
				</article> </li>

';



  }

}
















  }catch (PDOException $e) {
    echo 'Unable to connect to the database server: ' . $e->getMessage();
      }