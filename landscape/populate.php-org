<?php include('includes/database.php'); ?>
<?php

  header( "refresh:1;url=http://10.48.30.213/landscape/deployments.php" );
        //Assign get variable
        $id = $_GET['id'];



//Create the select query
  $query ="SELECT fqdn from deployments WHERE id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
                        $fqdn = $row['fqdn'];
                }
                //Free Result set
                $result->close();
        }




### script to pull Dacl
system("sudo -S python3 /root/ise-landscape/mise/dacl_data.py $fqdn");

#### script to pull allowed protocol
system("sudo -S python3 /root/ise-landscape/mise/ap_data.py $fqdn");

### script to pull authz
system("sudo -S python3 /root/ise-landscape/mise/authz_data.py $fqdn");

### script to pull nad group sets
system("sudo -S python3 /root/ise-landscape/mise/nad_data.py $fqdn");



### script to pull nad group sets
system("sudo -S python3 /root/ise-landscape/mise/sgt_data.py $fqdn");


### script to pull policysets
system("sudo -S python3 /root/ise-landscape/mise/policyset_data.py $fqdn $id");



### script to fetch policyset authentication
//Create the select query
  $query ="SELECT * from policyset WHERE inheritid = $id ";
  //Get results
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
                        $isename = $row['isename'];
                        $policysetid = $row['policysetid'];
                        $policyset = $row['policyset'];

                        system("sudo -S python3  /root/ise-landscape/mise/authentication.py  '$isename' '$policysetid' '$policyset'");
                }
                //Free Result set
                $result->close();
        }




### script to fetch policyset authorization
//Create the select query
  $query ="SELECT * from policyset WHERE inheritid = $id ";
  //Get results
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
                        $isename = $row['isename'];
                        $policysetid = $row['policysetid'];
                        $policyset = $row['policyset'];

                        system("sudo -S python3  /root/ise-landscape/mise/authorization.py  '$isename' '$policysetid' '$policyset'");
                }
                //Free Result set
                $result->close();
        }














### script to set fetched to yes
system("sudo -S python3 /root/ise-landscape/mise/fetched_yes.py $id"); 


### script to cleanup inheritit
//Create the select query
  $query ="UPDATE policyset set inheritid = NULL ";
  //Get results
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
                //Free Result set
