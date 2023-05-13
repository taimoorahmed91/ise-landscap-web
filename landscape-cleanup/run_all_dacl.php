<?php include('includes/database.php'); ?>
<?php


header( "refresh:5;url=http://10.48.30.213/landscape/dacl.php" );


//Create the select query
  $query ="SELECT dacl from temp WHERE code_post IS NULL";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
                        $dacl = $row['dacl'];
                        system("sudo -S python3  /root/ise-landscape/dacl-api/demo-post_dacl.py  $dacl");
                        system("sudo -S python3  /root/ise-landscape/dacl-api/demo-put_dacl.py  $dacl");
                }
                //Free Result set
                $result->close();
        }
  
