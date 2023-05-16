<?php
$output = shell_exec('/root/ise-landscape/script/cleanup.sh 2>&1');
echo $output;
?>
