<?php include 'top_log.php'; ?>

<?php
	include("includes/db.php");
	include("includes/functions.php");
	 error_reporting(E_ALL & ~E_NOTICE);

	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		header("location:shoppingcart.php");
		exit();
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SWEETS</title>
<script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
</head>


<body>
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
<div align="center">
<h1 class="head">Toys</h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
			$result=mysql_query("select * from  gifts where category='t'") or die("select * from  gifts where category='t'"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
		?>
		<tr><td colspan="2"><hr size="1" /></td></tr>
    	<tr >
        	<td><img src="<?php echo $row['picture']?>"   width="200" height="200"/></td>
            <td>   	<b><?php echo $row['name']?></b><br />
                    Price:<big style="color:green">
                    	Rs.<?php echo $row['prize']?></big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['id_no']?>)" />
			</td>
		</tr>
        <?php } ?>
    </table>
</div>
</body>
</html>


<?php include 'bottom.php'; ?>