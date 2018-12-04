<?php
  //This code list all of the products which have never been purchased
  include "connecttodb.php";
  $query = "SELECT Description FROM Product AS p WHERE p.ProductID NOT IN (SELECT pb.ProductID FROM purchasedBy AS pb);";
  $result = mysqli_query($connection, $query);
  if(!$query){
    die("lame product query failed");
  }
  echo "<ul>";
  while ($row = mysqli_fetch_assoc($result)){
    echo "<li>" . $row["Description"] . "</li>"; 
  }
  echo "</ul>";
  mysqli_free_result($result);
  mysqli_close($connection);
?>
