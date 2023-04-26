<?php include('includes/database.php'); ?>
<?php

  header( "refresh:5;url=http://10.48.30.213/landscape2/authz.php" );
	//Assign get variable
	$id = $_GET['id'];



//Create the select query
  $query ="SELECT authz from authz WHERE no = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($result = $mysqli->query($query)){
		//Fetch object array
		while($row = $result->fetch_assoc()) {
			$authz = $row['authz'];
		}
		//Free Result set
		$result->close();
	}
  

system("sudo -S python3  /root/ise-landscape/authz/demo-post_authz.py  $authz");

system("sudo -S python3  /root/ise-landscape/authz/demo-put_authz.py  $authz");



?>
