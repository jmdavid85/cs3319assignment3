<?php
  //This code gets all of the agents to be used in a list box
  include "connecttodb.php";
  $query = "SELECT * FROM Agent;";
  $result = mysqli_query($connection, $query);
  if (!result) {
    die ("agent query failed");
  }
  while ($row = mysqli_fetch_assoc($result)){
    echo "<option value='";
    echo $row["AgentID"] . "'>";
    echo $row["FirstName"] . " " . $row["LastName"];
    echo "</option>";
  }
  mysqli_free_result($result);
  mysqli_close($connection);
?>
