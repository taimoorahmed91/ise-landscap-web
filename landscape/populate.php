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
#system("sudo -S python3 /patchofscript $fqdn");

### script to pull authz
#system("sudo -S python3 /patchofscript $fqdn");

### script to pull policy sets
#system("sudo -S python3 /patchofscript $fqdn");

### script to set fetched to yes
system("sudo -S python3 /root/ise-landscape/mise/fetched_yes.py $id"); 


## this file is called populate.php
?>
