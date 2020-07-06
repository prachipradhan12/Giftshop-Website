<?php include 'top.php'; ?>
<?php
 error_reporting(E_ALL & ~E_NOTICE);
$name=$_POST['fname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$password=$_POST['password'];
$confirm_pwd=$_POST['confirm_pwd'];

$db=mysql_connect("localhost","root","");
mysql_select_db("giftshop",$db);
if($password==$confirm_pwd)
{

$sql="insert into register (firstName , lastName , sex  , password)  values ('".$name."','".$lname."','".$sex."','".$password."')";

$rs=mysql_query($sql);
if($rs)
{
echo "<h3>Registered</h3>";
}
else
{
echo $rs;
}
}
else
{
echo "<h3>password dont match</h3>";
}
mysql_close();

?>
<?php include 'bottom.php'; ?>