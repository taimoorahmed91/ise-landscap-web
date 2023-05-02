<?php include('includes/database.php'); ?>
<?php

  header( "refresh:2;url=http://10.48.30.213/landscape/policyset.php" );
        //Assign get variable
        $id = $_GET['id'];



//Create the select query
  $query ="SELECT id from policy_source WHERE no = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
                        $authz = $row['id'];
                }
                //Free Result set
                $result->close();
        }
  

system("sudo -S python3  /root/ise-landscape/policy-set/run_script_policy_source.py  $authz");




?>
