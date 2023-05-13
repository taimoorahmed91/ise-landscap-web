<?php include('includes/database.php'); ?>
<?php

  header( "refresh:2;url=http://10.48.30.213/landscape/policyset.php" );
	//Assign get variable
	$id = $_GET['id'];



//Create the select query
  $query ="SELECT name from policyset WHERE id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($result = $mysqli->query($query)){
		//Fetch object array
		while($row = $result->fetch_assoc()) {
			$name = $row['name'];
		}
		//Free Result set
		$result->close();
	}
  

system("sudo -S python3 /root/ise-landscape/policy-set/srcid.py   $name");

system("sudo -S python3 /root/ise-landscape/policy-set/dstid.py   $name");



?>
