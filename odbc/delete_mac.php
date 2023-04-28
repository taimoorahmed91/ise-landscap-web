<?php include('includes/database.php'); ?>
<?php
	//Assign get variable
	$id = $_GET['id'];


	$query = "DELETE FROM odbc WHERE id= $id";

	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$msg="Customer Updated";
		header('Location:mac.php?msg='.urlencode($msg).'');
		exit;
	
?>
