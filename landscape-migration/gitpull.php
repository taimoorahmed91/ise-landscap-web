<?php

    header("refresh:1;url=http://10.48.30.213/landscape/patch.php");
// Execute the bash script with sudo
$scriptPath = '/root/ise-landscape/script/git_pull_script.sh';
$command = "sudo $scriptPath 2>&1";
$output = shell_exec($command);

// Output the result
echo "<pre>$output</pre>";
?>

