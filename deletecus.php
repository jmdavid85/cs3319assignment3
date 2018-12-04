<?php
  //This code deletes a customer from the database
  include "connecttodb.php";
  $cus = $_POST["deleteCus"];
  //This code deletes all of the purchases the customer has made before
  //deleting the customer
  $query1 = "DELETE FROM purchasedBy WHERE CustomerID = '" . $cus . "';";
  $query2 = "DELETE FROM Customer WHERE CustomerID = '" . $cus . "';";
  $result1 = mysqli_query($connection, $query1);
  $result2 = mysqli_query($connection, $query2);
  mysqli_close($connection);
  echo "<br>Customer has been deleted!<br>";
  echo "<a href='index2.php'>Go back</a>";
?>
