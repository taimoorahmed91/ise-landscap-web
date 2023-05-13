<?php include('includes/database.php'); ?>
<?php

  header( "refresh:2;url=http://10.48.30.213/landscape/policyset_replication.php" );
	//Assign get variable
	$id = $_GET['id'];



//Create the select query
  $query ="SELECT name,dsturl from policysetauthen WHERE id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($result = $mysqli->query($query)){
		//Fetch object array
		while($row = $result->fetch_assoc()) {
			$name = $row['name'];
			$dsturl = $row['dsturl'];
		}
		//Free Result set
		$result->close();
	}
  

system("sudo -S python3 /root/ise-landscape/policy-set/populate_src_dst_id.py   '$name' '$dsturl'");








//Create the select query
  $query ="SELECT name,srchref,dsthref from policysetauthen WHERE id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
		        $name = $row['name'];       
			$srchref = $row['srchref'];
                        $dsthref = $row['dsthref'];
                }
                //Free Result set
                $result->close();
        }


system("sudo -S python3 /root/ise-landscape/policy-set/authentication_put.py   '$srchref' '$dsthref' '$name'");







?>
