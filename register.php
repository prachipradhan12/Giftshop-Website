<?php include 'top.php'; ?>


<div id="myDIV"><a href="index.php" style="color:#FFFFFF">HOME</a></div>
<P>
<FORM name="register" method="POST" action="insert.php" >
<center>
<fieldset style="width:80%;" >
<legend align="center">
<font  face="Rosewood Std" color="#0033CC" dir="rtl" size="+4">Registration Form</font>

</legend>
<table bordercolordark="#000000" border="0" cellpadding="5" cellspacing="5" align="center" >
<tr>
<td> 
<label FOR="YOURNAME"><b>First Name</b><br></label></td>
<td><input type="TEXT" name="fname"
id="YOURNAME"/>
</td>
<td>
<label FOR="LASTNAME"><b>Last Name</b><br></label></td>
<td><input type="TEXT" name="lname" 
id="LASTNAME"/>
</td>
</tr>
<tr>
<td><b>Sex</b></td>
<td>
<label for="male">
<input type="radio"  name="sex"  value="male"  id="male">Male </label></td>
<td><label for="female">
<input type="radio"  name="sex"  value="female"  id="female">Female </label></td>
</tr>

<tr><td>
<label for="pwd"><b>Password</b></label>
</td>
<td colspan="50">
<input type="password" size="50" id="pwd" name="password"/>
</td></tr>
<tr>
<td>
<label for="cpwd">
<b>Confirm Password</b>
</label>
</td>
<td colspan="50">
<input type="password"  size="50" id="cpwd" name="confirm_pwd" />
</td></tr>
<tr>
<td align="center" colspan="3">
<input type="submit" name="submit" id="submit"  value="Submit" ></td>
</tr>
<tr><td align="center" colspan="3"><b>You are already a member then <a href="loginForm.php">LOGIN</a></b></td></tr>
</table>
</fieldset>
</center>
</FORM>
<?php include 'bottom.php'; ?>
