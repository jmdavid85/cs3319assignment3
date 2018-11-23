<!DOCTYPE html>
<html>
<head>
	<title>Assignment 3</title>
	<link rel="stylesheet" type="text/css" href="museum.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<?php
include "connecttodb.php";
?>
<h1>Assignment 3</h1>
<form action="" method="post">
  Select a customer:
  <select name="pickacustomer" id="pickacustomer">
    <option value="1">Select Here</option>
    <?php
      include "getcustomer.php";
    ?>
  </select>
  <br>
  <br>
  <fieldset>
    <legend>Sort products by name or price:</legend>
    <input type="radio" name="sortBy" value="Description" checked> Name<br>
    <input type="radio" name="sortBy" value="Cost"> Price
  </fieldset>
  <br>
  <fieldset>
    <legend>Sort by ascending or descending:</legend> 
    <input type="radio" name="upDown" value="ASC" checked> Ascending<br>
    <input type="radio" name="upDown" value="DESC"> Descending
  </fieldset><br>
  <input type="submit" value="Submit" name="submitBtn">

    
</form>
<br>

<hr>
Products Purchased By Selected Customer:<br><br>
<?php
 if(isset($_POST['submitBtn'])){
  include "connecttodb.php";
  include "getproducts.php";
 }
?>
<hr>
<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>

