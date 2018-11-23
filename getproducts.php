<?php
  $whichCus = $_POST["pickacustomer"];
  $toSort = $_POST["sortBy"];
  $upOrDown = $_POST["upDown"];
  $query = "SELECT Description, Cost, pb.Quantity FROM purchasedBy AS pb INNER JOIN Product AS p ON pb.ProductID = p.ProductID WHERE CustomerID = " . $whichCus . " ORDER BY " . $toSort . " " . $upOrDown . ";";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die("database query on products failed");
  }
  echo "<ul>";
  while($row = mysqli_fetch_assoc($result)){
    echo "<li>" . $row["Description"] . "<br>Price: $" . $row["Cost"] . "<br>Quantity: " . $row["Quantity"] . "<br><br></li>";
  }
  echo "</ul>";
  mysqli_free_result($result);
?>
