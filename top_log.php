<?php
session_start(); // Use session variable on this page. This function must put on the top of page.
if(!isset($_SESSION['loginName']) ){ // if session variable "username" does not exist.
header("location:loginForm.php?msg=Please%20login%20to%20access%20area%20!"); // Re-direct to index.php
}
else
{
	include "includes/db.php"; 
}
?>
<html>
<head>
<title>Welcome to GiftShop</title>
<link rel="shortcut icon" href="images\ico.jpg">
<link rel="stylesheet" type="text/css" href="css\css1.css" />
</head>
<body  >
 <img  src="images\background copy.jpg" id="yourid"/>
 
 <div style="margin-left:700px; margin-top:70px" >
<font  size="100px" face="Lucida Handwriting" color="#0000FF"><a class="two ts" ><b><big>Gift Shop</big></b></a></font>
</div>

<p>&nbsp;</p>
<center><h3>Welcome <font color="Blue"><?php echo $_SESSION['loginName']; ?> !</font></h3></center>

<center>
<div class="GS" style="width:86%; ">
<table width="100%" >
<tr><td  width="79%">
<div id="wrap">
<ul id="navbar">
 <li><a href="index_log.php">HOME</a></li>        
 <li><a href="category.php">CATAGORIES</a><ul>
            <li><a href="sweets_log.php">SWEETS</a></li><li>
            <a href="flowers_log.php">FLOWERS</a></li><li>
            <a href="toys_log.php">TOYS</a></li></ul>
         </li>
 <li><a href="shoppingcart.php">SHOPPING CART</a></li>
 <li><a href="contact_log.php">CONTACT</a></li>
 <li><a href="logout.php">LOGOUT</a></li>
</ul>
 </div>
</td><td width="21%">
<form method="get" action="search_log.php">
<input type="text" name="query"><input type="submit" name="submit" value="Search" >
</form>
</td></tr>
 </table>
</div>
<br>
<div class="GS" style="width:82%; background-image: url(image/blue-shade.png); " >
<br />