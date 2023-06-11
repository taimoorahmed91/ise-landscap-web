<?php include('includes/database.php'); ?>
<?php

  header( "refresh:1;url=http://10.48.30.213/landscape/nad.php" );
        //Assign get variable
        $id = $_GET['id'];



//Create the select query
  $query ="SELECT * from nad WHERE id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
                        $href = $row['href'];
                        $nadid = $row['nadid'];
                }
                //Free Result set
                $result->close();
        }
  

system("sudo -S python3 /root/ise-landscape/mise/resync_nad.py  '$href'  '$nadid' ");




?>
