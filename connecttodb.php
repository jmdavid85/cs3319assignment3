<?php
  //This code connects to the database
  $dbhost = "localhost";
  $dbuser= "root";
  $dbpass = "jesse";
  $dbname = "jdavid85assign2";
  $connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
  if (mysqli_connect_errno()) {
    die("Database connection failed :" .
    mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
  } //end of if statement
?>
