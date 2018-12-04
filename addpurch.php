<?php
  //This code adds a new purchase to the database
  include "connecttodb.php";
  $cusID = $_POST["custpurch"];
  $prodID = $_POST["prodpurch"];
  $quan = $_POST["quan"];
  $query1 = "SELECT Quantity FROM purchasedBy WHERE ProductID = '" . $prodID . "' AND CustomerID = '" . $cusID . "';";
  $result1 = mysqli_query($connection, $query1);
  //This checks if the person has already bought the product before
  if(mysqli_num_rows($result1)==0){
    $query2 = "INSERT INTO purchasedBy (ProductID, CustomerID, Quantity) VALUES ('" . $prodID . "', '" . $cusID . "', " . $quan . ");";
  } else {
    $query2 = "UPDATE purchasedBy SET Quantity = " . $quan . " + " . mysqli_fetch_assoc($result1)["Quantity"] . " WHERE ProductID = '" . $prodID . "' AND CustomerID = '" . $cusID . "';";
  }
  $result2 = mysqli_query($connection, $query2);
  if(!$result2){
    die("insert product query failed");
  }
  echo "<br>Purchase has been recorded!<br>";
  mysqli_close($connection);
  echo "<a href='index2.php'>Go back</a>";
?>
