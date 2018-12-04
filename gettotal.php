<?php
  //This code gets the total money made from the specified product
  include "connecttodb.php";
  $prod = $_POST["products"];
  $query1 = "SELECT SUM(pb.Quantity) AS total FROM purchasedBy AS pb INNER JOIN Product AS p ON pb.ProductID = p.ProductID WHERE pb.ProductID = '" . $prod . "';";
  $query2 = "SELECT Description AS d, Cost FROM Product WHERE ProductID = '" . $prod . "';";
  $result1 = mysqli_query($connection, $query1);
  $result2 = mysqli_query($connection, $query2);
  $row1 = mysqli_fetch_assoc($result1);
  $row2 = mysqli_fetch_assoc($result2);
  echo "<br><b>" . $row2["d"] . "</b><br>Total Purchases: " . $row1["total"] . "<br>Total Money Made: $" . $row1["total"] * $row2["Cost"] . "<br><br>";
  mysqli_free_result($result1);
  mysqli_free_result($result2);
  mysqli_close($connection);
  echo "<a href='index2.php'>Go back</a>";
?>
