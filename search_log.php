<?php include 'top_log.php'; ?>
<fieldset style="width:80%;" >
<legend align="center">
<font  face="Rosewood Std" color="#0033CC" dir="rtl" size="+4">Search Results</font>
</legend> 
<?php

  mysql_connect("localhost","root","");
  mysql_select_db("giftshop");
  $name = mysql_real_escape_string($_GET['query']);
  // Perform the fulltext search
  $query = "SELECT * FROM gifts WHERE name like '%".$name."%'";
  $result = mysql_query($query);
echo "<div id='sDIV' allign='center'> ";
  // If results were found, output them
  if (mysql_num_rows($result) > 0) {
    echo "<ol>";
echo "<table width='100%' class='text' border='2' padding='1' >";
    echo "<tr >";
    echo "<td>Product List";
    echo "</td>";
    echo "<td> Price(Rs.)";
    echo "</td><td></td>";
    echo "</tr>";
    while (list($id, $name, $price) = mysql_fetch_array($result)) 
	{
    echo "<tr >";
    echo "<td>";
    echo $name;
    echo "</td>";
    echo "<td>  ";
    echo $price;
    echo "</td>";
	echo "<td><a href='category.php'>BUY</a></td>";
	echo "</tr>";
    }
	echo "</table>";
	echo "</ol> ";
	} else {
    echo "<a class='bcart'>No results found</a>"; }
   echo "</div>";
  
  ?>
  </fieldset>
<?php include 'bottom.php'; ?>
