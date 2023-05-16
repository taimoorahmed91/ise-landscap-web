<?php include('includes/database.php'); ?>
<?php


header( "refresh:5;url=http://10.48.30.213/landscape/checkout.php" );




// Script to fetch policyset authentication


  $query_deploy ="SELECT * from deployments WHERE dest = 'yes'";


$result_deploy = $mysqli->query($query_deploy) or die($mysqli->error.__LINE__);

if ($result_deploy = $mysqli->query($query_deploy)) {
    // Fetch object array
    while ($row = $result_deploy->fetch_assoc()) {

	    $fqdn = $row['fqdn'];

    }
    // Free Result set
    $result_deploy->close();
}













//Create the select query
  $query_dacl ="SELECT * from dacl WHERE queue = 'yes'";
  //Get results

    $result_dacl = $mysqli->query($query_dacl) or die($mysqli->error.__LINE__);
        if($result_dacl = $mysqli->query($query_dacl)){
                //Fetch object array
                while($row = $result_dacl->fetch_assoc()) {
                        $id = $row['id'];
                        $daclid = $row['daclid'];
                        system("sudo -S python3  /root/ise-landscape/mise/post_dacl.py  '$id' '$fqdn' '$daclid'");
                }
                //Free Result set
                $result_dacl->close();
        }
