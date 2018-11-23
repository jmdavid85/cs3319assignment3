<?php
 $query = "SELECT * FROM Customer ORDER BY LastName;";
 $result = mysqli_query($connection,$query);
 if(!$result){
  die("database query failed.");
 }
 while($row = mysqli_fetch_assoc($result)){
  echo "<option value='";
  echo $row["CustomerID"] . "'>";
  echo $row["FirstName"] . " " . $row["LastName"] . ", " . $row["City"] . ", " . $row["PhoneNumber"];
  echo "</option>";
 }
 mysqli_free_result($result);
?>
