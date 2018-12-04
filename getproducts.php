<?php
  //This code gets all of the products based off of the criteria of which 
  //order to display the information
  include "connecttodb.php";
  $whichCus = $_POST["pickacustomer"];
  $toSort = $_POST["sortBy"];
  $upOrDown = $_POST["upDown"];
  $query = "SELECT Description, Cost, pb.Quantity FROM purchasedBy AS pb INNER JOIN Product AS p ON pb.ProductID = p.ProductID WHERE CustomerID = " . $whichCus . " ORDER BY " . $toSort . " " . $upOrDown . ";";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die("database query on products failed");
  }
  echo "<b>Products purchased by selected customer:</b><br><br>";
  echo "<ul>";
  while($row = mysqli_fetch_assoc($result)){
    echo "<li>" . $row["Description"] . "<br>Price: $" . $row["Cost"] . "<br>Quantity: " . $row["Quantity"] . "<br><br></li>";
  }
  echo "</ul>";
  echo "<a href='index2.php'>Go back</a>";
  mysqli_free_result($result);
  mysqli_close($connection);
?>
