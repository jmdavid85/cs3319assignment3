<!DOCTYPE html>
<html>
<head>
	<title>Assignment 3</title>
	<link rel="stylesheet" type="text/css" href="museum.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<!--<script type="text/javascript" src="museum.js">-->
</script>
<?php
include "connecttodb.php";
?>
<h1>Assignment 3</h1>
Select A Customer:
<form action="" method="post">
<select name="pickacustomer" id="pickacustomer">
  <option value="1">Select Here</option>
<?php
include "getcustomer.php";
?>
</select>
</form>
<hr>
<?php
 if(isset($_POST['pickacustomer'])){
  include "connecttodb.php";
  include "getartwork.php";
 }
?>
<hr>
<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>

