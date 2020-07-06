<?php include 'top.php'; ?>

<?php
	include("includes/db.php");
	include("includes/functions.php");
	 error_reporting(E_ALL & ~E_NOTICE);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SWEETS</title>
</head>


<body>
<form name="form1" method="post" action="loginForm.php">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
<div align="center">
<h1 class="head">Sweets</h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
			$result=mysql_query("select * from  gifts where category='s'") or die("select * from  gifts where category='s'"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
		?>
		<tr><td colspan="2"><hr size="1" /></td></tr>
    	<tr >
        	<td><img src="<?php echo $row['picture']?>"   width="200" height="200"/></td>
            <td>   	<b><?php echo $row['name']?></b><br />
                    Price:<big style="color:green">
                    	Rs.<?php echo $row['prize']?></big><br /><br />
                    <input type="submit" value="Add to Cart" onclick="submit" />
			</td>
		</tr>
        <?php } ?>
    </table>
</div>
</form>

</body>
</html>


<?php include 'bottom.php'; ?>