<?php

session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

if(!session_is_registered(loginName)){
header("location:loginForm.php");
}
?>
<?php include 'top_log.php'; 
echo "<br /><h1><font color='blue' >Logged In Successfully .</font></h1>";
echo "<h1>Enjoy shopping from Gift Shop</h1> <br />"; 
 include 'bottom.php'; ?>
