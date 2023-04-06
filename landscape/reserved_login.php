// <?php
// Start the session
// session_start();
// ?>

<html>
<HEAD>
<SCRIPT LANGUAGE="JavaScript">
function LogIn(){
loggedin=false;
username="";
password="";
username=prompt("Username:","");
username=username.toLowerCase();
password=prompt("Password:","");
password=password.toLowerCase();

if (username=="guest" && password=="login") { 
loggedin=true;
window.location="index.php";
}


if (loggedin==false) {
alert("Invalid login!");
}
}
</SCRIPT> 
<BODY>
<center>
<?php

session_start();
// Set session variables
$_SESSION["username"] = "dani948";

?> 
Body page
<form><input type=button value="Login Here" onClick="LogIn()"></form>
</center>
</body>
</html>
