<?php
// Set the repository URLs
$repositoryUrl1 = 'https://github.com/taimoorahmed91/ise-landscape.git';
$repositoryUrl2 = 'https://github.com/taimoorahmed91/ise-landscap-web.git';

// Set the local directory paths
$localDirectory1 = '/root/ise-landscape/mise2/';
$localDirectory2 = '/var/www/html/pulled/';

// Execute git pull for repository 1
if (is_dir($localDirectory1)) {
    $output1 = shell_exec("cd {$localDirectory1} && git pull origin master 2>&1");
    echo "Git pull for repository 1:<br>";
    echo nl2br($output1);
} else {
    echo "Local directory 1 does not exist.";
}

echo "<br><br>";

// Execute git pull for repository 2
if (is_dir($localDirectory2)) {
    $output2 = shell_exec("cd {$localDirectory2} && git pull origin master 2>&1");
    echo "Git pull for repository 2:<br>";
    echo nl2br($output2);
} else {
    echo "Local directory 2 does not exist.";
}
?>

