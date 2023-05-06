<?php include('includes/database.php'); ?>
<?php


        //Assign get variable
        $id = $_GET['id'];

//Create the select query
  $query ="SELECT * from authentications WHERE id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
                        $authenticationid = $row['authenticationid'];
                }
                //Free Result set
                $result->close();
        }
	$initial_path = "/root/ise-landscape/policyset/authentications/"; 
		
	$filename =  $authenticationid;
	$file = $initial_path.$filename;
	echo $file;
 ?>

