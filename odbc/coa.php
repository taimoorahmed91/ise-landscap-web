<?php include('includes/database.php'); ?>
<?php

  header( "refresh:5;url=http://10.48.30.213/odbc/mac.php" );
        //Assign get variable
        $id = $_GET['id'];



//Create the select query
  $query ="SELECT mac from odbc WHERE id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
                        $mac = $row['mac'];
                }
                //Free Result set
                $result->close();
        }
  

system("sudo -S python3  /root/ise-landscape/odbc/coa.py  $mac");




?>
