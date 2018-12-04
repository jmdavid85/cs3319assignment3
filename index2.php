<!DOCTYPE html>
<html>
<head>
	<title>Assignment 3</title>
</head>
<body>

<h1>Assignment 3</h1>

<!--This form gets all the products purchased by a selected customer-->
<form action="getproducts.php" method="post">
  Select a customer:
  <select name="pickacustomer" id="pickacustomer">
    <option value="1">Select Here</option>
    <?php
      include "getcustomer.php";
    ?>
  </select>
  <br>
  <br>
  <!--This next section is for the two sets of radio buttons to determine
  how the information should be displayed-->
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
  <input type="submit" value="Submit">
    
</form>
<br>
<hr>
<br>

<!--This form allows for the user to add a new purchase-->
<form action="addpurch.php" method="post">
  <b>Record a new purchase</b><br>
  Select a customer:
  <select name="custpurch" id="custpurch">
    <option value="1">Select Here</option>
    <?php
      include "getcustomer.php";
    ?>
  </select>
  <br><br>Select a product:
  <select name="prodpurch" id="prodpurch">
    <option value="1">Select Here</option>
    <?php
      include "getAllProducts.php";
    ?>
  </select>
  <br><br>Quantity: <input type="text" name="quan"><br><br>
  <input type="submit" value="Submit"><br>
</form>

<hr>
<br>

<!--This form allows for the user to add a new customer-->
<form action="addcust.php" method="post">
  <b>Enter a new customer</b><br><br>
    First Name: <input type="text" name="fname"><br><br>
    Last Name:  <input type="text" name="lname"><br><br>
    City:       <input type="text" name="city"><br><br>
    Phone #:    <input type="text" name="phone"><br><br>
    Agent:     
  <select name="pickagent" id="pickagent">
    <option value="1">Select Here</option>
    <?php
      include "getagents.php";
    ?>
  </select><br><br>
  <input type="submit" value="Submit">
</form>

<hr>

<!--This form allows for the user to update a selected customer's phone number-->
<form action="newnum.php" method="post">
  <br><b>Update customer phone number</b><br>
  Select Customer:
  <select name="newphone" id="newphone">
    <option value="1">Select Here</option>
    <?php
      include "getcustomer.php"
    ?>
  </select>
  <br><br>New number: <input type="text" name="newnum"><br><br>
  <input type="submit" value="Submit"><br>
</form>

<hr>

<!--This form allows for the user to delete a customer-->
<form action="deletecus.php" method="post">
  <br><b>Delecte a customer</b><br>
  Select Customer: 
  <select name="deleteCus" id="deleteCus">
    <option value="1">Select Here</option>
    <?php
      include "getcustomer.php"
    ?>
  </select>
  <br><br><input type="submit" value="Submit"><br>
</form>

<hr>

<!--This form allows for the user to enter a number and the website will
  display all of the products which have been purchased more than the
  value specified-->
<form action="quansort.php" method="post">
  <br><b>Customers who have bought more than specified quantity</b><br><br>
  Quantity: 
  <input type="text" name="howMuch"><br><br>
  <input type="submit" value="Submit"><br>
</form>

<hr>

<!--This part of the website will always display the products that have never
  been purchased-->
<br><b>Products that have never been sold:</b><br>
  <?php
    include "lameproducts.php";
  ?>
<hr>

<!--This form allows for the user to select a product and the website will
  show how many have been purchased and how much money it has made-->
<form action="gettotal.php" method="post">
  <br><b>Total money made from a particular product</b><br><br>
  Select product:   
  <select name="products" id="products">
    <option value="1">Select Here</option>
    <?php
      include "getAllProducts.php";
    ?>
  </select>
  <br><br><input type="submit" value="Submit">
</form>

<hr>

<!--This is the image from the tutorial which I kept in because I really like
  the colours-->
<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>

