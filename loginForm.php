<?php include 'top.php'; 
error_reporting (E_ALL ^ E_NOTICE);
 echo $_GET['msg']; 

?>

<center>
<fieldset style="width:80%;" >
<legend align="center">
<font  face="Rosewood Std" color="#0033CC" dir="rtl" size="+4">Login</font>
</legend>

<form name="login" method="post" action="login.php">
<table cellpadding="5" cellspacing="5" align="center">
<tr><td>Login Name</td><td><input name="loginName" type="text" /></td></tr>
<tr><td>Password</td><td><input name="pwd" type="password"/></td></tr>
<tr><td colspan="2" align="center"> <input type="submit" value="Sign In" onclick="submit"  /></td></tr>

</table>
</form>
</fieldset></center>

<?php include 'bottom.php'; ?>
