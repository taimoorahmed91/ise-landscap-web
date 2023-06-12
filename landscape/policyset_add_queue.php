<?php include('includes/database.php'); ?>
<?php

  header( "refresh:1;url=http://10.48.30.213/landscape/policyset.php" );
        //Assign get variable
        $id = $_GET['id'];


system("sudo -S python3 /root/ise-landscape/mise/policyset_add_queue.py  $id ");


?>
