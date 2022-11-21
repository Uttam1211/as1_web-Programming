<?php
include_once __DIR__ .'/layout.html.php';
?>
<center><h1>Add Auctions</h1></center><hr>
<form 
style="display:flex;
flex-direction: column;
    align-items: center;"
action="addAuction.php" method="post">
  <label for=''>Title</label>
  <input type="text" name="title">
  <label for=''>Description</label>
  <input type="text" name="description">
  <label for=''>Choose categories:</label>
  <select name="category">
      <option value="">--please choose an option--</option>
      <?php 
      for($i=0; $i<sizeof($result); $i++){
        echo 
        '<option value="'.$result[$i].'">'.$result[$i].'</option>
     ';
      }
      
    ?></select>
<label for=''>Price</label>
  <input type="text" name="price">
  <label for=''>More details</label>
  <input type="text" name="MoreDetail">
  <label for=''>end date</label>
  <input type="datetime" name="endDate" placeholder="YYYY-MM-DD HH:MM:SS" >
  <input type="submit" value="Submit" name="submit">

</form>
<?php include_once __DIR__.'/footer.html.php';?>