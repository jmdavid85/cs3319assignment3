<?php
  //This code returns all of the products where the purchased quantity
  //is above a specified value
  include "connecttodb.php";
  $quan = $_POST["howMuch"];
  $query = "SELECT FirstName, LastName, Description, pb.Quantity AS Quan FROM Customer AS c INNER JOIN purchasedBy AS pb ON c.CustomerID = pb.CustomerID INNER JOIN Product AS p ON pb.ProductID = p.ProductID WHERE pb.Quantity > " . $quan . ";";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die("Quantity query failed");
  }
  echo "<ul>";
  while($row = mysqli_fetch_assoc($result)){
    echo "<li><b>" . $row["FirstName"] . " " . $row["LastName"] . "</b><br>" . $row["Description"] . "<br>Quantity: " . $row["Quan"];
  }
  echo "</ul>";
  mysqli_free_result($result);
  mysqli_close($connection);
  echo "<a href='index2.php'>Go back</a>";
?>
