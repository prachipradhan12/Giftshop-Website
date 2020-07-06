<?php
session_start();
session_destroy();
unset($_SESSION["loginName"]);

header("location:loginForm.php?msg=You%20have%20been%20logged%20out!");
?>