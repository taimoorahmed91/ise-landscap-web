<?php include('includes/database.php'); ?>
<?php

  header( "refresh:2;url=http://10.48.30.213/landscape/policyset_replication.php" );
	//Assign get variable
	$name = $_GET['name'];



//Create the select query
  $query ="SELECT srcid,dstid from policyset WHERE name = '$name'";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($result = $mysqli->query($query)){
		//Fetch object array
		while($row = $result->fetch_assoc()) {
			$srcid = $row['srcid'];
			$dstid = $row['dstid'];
		}
		//Free Result set
		$result->close();
	}
  

system("sudo -S python3 /root/ise-landscape/policy-set/authentication_post.py  $srcid $dstid");




?>
