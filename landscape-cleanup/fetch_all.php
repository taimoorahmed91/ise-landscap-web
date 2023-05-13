

<?php

  header( "refresh:1;url=http://10.48.30.213/landscape/authz.php" );
system("sudo -S python3 /root/ise-landscape/authz/get_all_authz.py");
?>


