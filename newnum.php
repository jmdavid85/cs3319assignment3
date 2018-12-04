<?php
  //This code updates a customer's number to something else
  include "connecttodb.php";
  $customer = $_POST["newphone"];
  $num = $_POST["newnum"];
  $query = "UPDATE Customer SET PhoneNumber = '" . $num . "' WHERE CustomerID = '". $customer . "';";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die("phone update query failed");
  }
  mysqli_close($connection);
  echo "<br>The customer's phone number has been updated!<br>";
  echo "<a href='index2.php'>Go back</a>";
?>
