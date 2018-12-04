<?php
  //This code is used to add a new customer to the database
  include "connecttodb.php";
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $city = $_POST["city"];
  $pnum = $_POST["phone"];
  $agentID = $_POST["pickagent"];
  $query1 = "SELECT MAX(CustomerID) AS ID FROM Customer";
  $result1 = mysqli_query($connection, $query1);
  if(!$result1){
    die("new cusID query failed");
  }
  //The new ID will just be one more than the previous max ID
  $newID = mysqli_fetch_assoc($result1)["ID"] + 1;
  $query2 = "INSERT INTO Customer VALUES ('" . $newID . "', '" . $fname . "', '" . $lname . "', '" . $city . "', '" . $pnum . "', '" . $agentID . "');";
  $result2 = mysqli_query($connection, $query2);
  if(!$result2){
    die("add customer failed");
  }
  mysqli_free_result($result1);
  mysqli_close($connection);
  echo "<br>New customer has been added!<br>";
  echo "<a href='index2.php'>Go back</a>";
?>
