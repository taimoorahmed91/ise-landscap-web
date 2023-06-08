<?php include('includes/database.php'); ?>
<?php

  header( "refresh:1;url=http://10.48.30.213/landscape/deployments.php" );
        //Assign get variable
        $id = $_GET['id'];


system("sudo -S python3 /root/ise-landscape/mise/markinactive.py");

system("sudo -S python3 /root/ise-landscape/mise/markactive.py  $id ");


?>
