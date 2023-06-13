<html>
<head>
</head>
<center>
<fieldset>
<legend>Login </legend>
<form action="loginprocess.php" method="POST"><br><br>
Username:<input type="text" required="" name="username"><br><br>
Password:<input type="password" required="" name="password"><br><br>
<input type="submit" value="Login" name="sub">
<br>
<?php 
if(isset($_REQUEST["err"]))
	$msg="Invalid username or Password";
?>
<p style="color:red;">
<?php if(isset($msg))
{
	
echo $msg;
}
?>

</p>

</form>
