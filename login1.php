<?php include 'top.php'; 
session_start();
error_reporting(E_ALL & ~E_NOTICE);
$name=$_POST['loginName'];
$pwd=$_POST['pwd'];
$db=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("giftshop",$db) or die(mysql_error());
$sql=mysql_query("select * from register",$db);
$c=0;
while($r=mysql_fetch_array($sql))
{
  if($r[firstName]==$name && $r[password]==$pwd)
 {     
  $c=1; 
  session_register("loginName");
session_register("pwd"); 
header("location:login_success.php");
 }
}
if($c==0)
{
echo "<br /><h2><font color='red' >Wrong Login Name or Password</font></h2>";
?>
<center>
<fieldset style="width:80%;" >
<legend align="center">
<font  face="Rosewood Std" color="#0033CC" dir="rtl" size="+4">Login</font>
</legend>

<form name="login" method="post" action="login1.php">
<table cellpadding="5" cellspacing="5" align="center">
<tr><td>Login Name</td><td><input name="loginName" type="text" /></td></tr>
<tr><td>Password</td><td><input name="pwd" type="password"/></td></tr>
<tr><td colspan="2" align="center"> <input type="submit" value="Sign In" onclick="submit"  /></td></tr>

</table>
</form>
</fieldset></center>

<?php 
}
include 'bottom.php'; ?>
