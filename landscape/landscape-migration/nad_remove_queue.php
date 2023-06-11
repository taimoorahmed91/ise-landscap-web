<?php include('includes/database.php'); ?>
<?php

  header( "refresh:1;url=http://10.48.30.213/landscape/nad.php" );
        //Assign get variable
        $id = $_GET['id'];


system("sudo -S python3 /root/ise-landscape/mise/nad_remove_queue.py  $id ");


?>
