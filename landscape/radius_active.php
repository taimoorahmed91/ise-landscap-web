<?php include('includes/database.php'); ?>
<?php

  header( "refresh:1;url=http://10.48.30.213/landscape/external_auth.php" );
        //Assign get variable
        $id = $_GET['id'];


system("sudo -S python3 /root/ise-landscape/mise/markinactiveradius.py");

system("sudo -S python3 /root/ise-landscape/mise/markactiveradius.py  $id ");


?>
