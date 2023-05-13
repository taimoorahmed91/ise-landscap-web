<?php include('includes/database.php'); ?>

<?php

  header( "refresh:2;url=http://10.48.30.213/landscape/policyset.php" );
        //Assign get variable
	$id = $_GET['id'];

//Create the select query
  $query ="SELECT * from policynameid WHERE id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
			$id = $row['id'];
			$isename = $row['isename'];
                        $name = $row['name'];
                        $policysetid = $row['policysetid'];
                }
                //Free Result set
                $result->close();
        }
  

system("sudo -S python3  /root/ise-landscape/policyset/insetid.py $name $isename");





//Create the select query
  $query ="SELECT * from policynameid WHERE id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
	                        $isename = $row['isename'];
                        $name = $row['name'];
                        $policysetid = $row['policysetid'];       
		}
                //Free Result set
                $result->close();
        }




system("sudo -S python3  /root/ise-landscape/policyset/policyset.py $isename $policysetid  $name ");
system("sudo -S python3  /root/ise-landscape/policyset/authentication.py  $isename $policysetid  $name");



?>
