<?php


$conn = mysqli_connect("localhost", "root", "C1sc0123@", "landscape");

// Check if connection established
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
session_start ();

if(isset($_REQUEST['sub']))
{
$a = $_REQUEST['username'];
$b = $_REQUEST['password'];


$resultAll = mysqli_query($conn, "SELECT * FROM users_table where username='$a'and password='$b'");

if(!$resultAll){
	die(mysqli_error($conn));
}

$result=mysqli_fetch_array($resultAll);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location:index.php");
}
else	
{
	header("location:login.php?err=1");
	
}
}
?>
