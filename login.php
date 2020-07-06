<?php include 'top_log.php';
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
  $_SESSION['loginName']=$_POST['loginName'];
echo "<br /><h1><font color='blue' >Logged In Successfully .</font></h1>";
echo "<h1>Enjoy shopping from Gift Shop</h1> <br />"; 
 }
}
if($c==0)
{
header("location:loginForm.php?msg=Wrong%20Username%20or%20Password");

}
include 'bottom.php'; ?>
