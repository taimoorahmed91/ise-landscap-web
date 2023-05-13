

<?php
header( "refresh:1;url=http://10.48.30.213/landscape/nadgroup.php" );
system("sudo -S python3 /root/ise-landscape/parent/nadgroup_resync.py");
?>
