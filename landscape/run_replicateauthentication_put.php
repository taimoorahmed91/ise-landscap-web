<?php include('includes/database.php'); ?>
<?php

  header( "refresh:2;url=http://10.48.30.213/landscape/replicateauthentication.php" );
        //Assign get variable
        $id = $_GET['id'];



  header( "refresh:2;url=http://10.48.30.213/landscape/replicateauthentication.php" );
        //Assign get variable
        $id = $_GET['id'];



//Create the select query
  $query ="SELECT * from replicateauthentication WHERE id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $dstise = $row['dstise'];
                        $dstpolicyset = $row['dstpolicyset'];
                }
                //Free Result set
                $result->close();
        }
  

system("sudo -S python3 /root/ise-landscape/policyset/insert_dstpolicysetid.py  $id  $dstise $dstpolicyset");



















  $query ="SELECT replicateauthentication.id, replicateauthentication.dstise, replicateauthentication.dstpolicysetid, replicateauthentication.dstpolicyid, replicateauthentication.sourceauthentication, authentications.authenticationname, authentications.authenticationid,replicateauthentication.code_post, replicateauthentication.code_put, replicateauthentication.time from replicateauthentication INNER JOIN authentications ON authentications.id = replicateauthentication.sourceauthentication WHERE replicateauthentication.id = $id";
  //Get results

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        if($result = $mysqli->query($query)){
                //Fetch object array
                while($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $dstise = $row['dstise'];
                        $dstpolicysetid = $row['dstpolicysetid'];
			$srcpolicyid = $row['authenticationid'];
			$dstpolicyid = $row['dstpolicyid'];
                }
                //Free Result set
                $result->close();
        }






system("sudo -S python3 /root/ise-landscape/policyset/push_put.py  $id  $dstise $dstpolicysetid $srcpolicyid $dstpolicyid");









?>
