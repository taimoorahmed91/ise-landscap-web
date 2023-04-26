<?php include('includes/database.php'); ?>
<?php

  header( "refresh:5;url=http://10.48.30.213/landscape2/ap.php" );
	//Assign get variable
	$id = $_GET['id'];



//Create the select query
  $query ="SELECT ap from ap WHERE no = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($result = $mysqli->query($query)){
		//Fetch object array
		while($row = $result->fetch_assoc()) {
			$ap = $row['ap'];
		}
		//Free Result set
		$result->close();
	}
  

system("sudo -S python3 /root/ise-landscape/allowed-protocol-api/demo-finalized-ap-post.py  $ap");

system("sudo -S python3 /root/ise-landscape/allowed-protocol-api/demo-finalized-ap-put.py  $ap");



?>
