<?php include('includes/database.php'); ?>
<?php

  header( "refresh:1;url=http://10.48.30.213/landscape/authentication.php" );
        //Assign get variable
        $id = $_GET['id'];



//Create the select query
  $query ="SELECT * from authentication WHERE id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
                        $href = $row['href'];
                        $authenticationid = $row['authenticationid'];
                }
                //Free Result set
                $result->close();
        }
  

system("sudo -S python3 /root/ise-landscape/mise/resync_authentication.py  '$href'  '$authenticationid' ");




?>
