<?php
  //This code gets all of the products from the product table to be used
  //in a combo box
  include "connecttodb.php";
  $query = "SELECT * FROM Product;";
  $result = mysqli_query($connection,$query);
  if(!$result){
    die("product query failed.");
  }
  while($row = mysqli_fetch_assoc($result)){
    echo "<option value='";
    echo $row["ProductID"] . "'>";
    echo $row["Description"];
    echo "</option>";
  }
  mysqli_free_result($result);
  mysqli_close($connection);
?>
