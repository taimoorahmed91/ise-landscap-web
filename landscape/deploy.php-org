<?php include('includes/database.php'); ?>

<?php


header( "refresh:1;url=http://10.48.30.213/landscape/checkout.php" );

// Script to fetch policyset authorization
$query = "SELECT * FROM deployments WHERE marked = 'yes'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

if ($result = $mysqli->query($query)) {
    // Fetch object array
    while ($row = $result->fetch_assoc()) {
        $fqdn = $row['fqdn'];
        echo $fqdn;
        system("sudo -S python3 /root/ise-landscape/mise/deploy.py  '$fqdn' ");
    }
    // Free Result set
    $result->close();
}


system("sudo -S python3 /root/ise-landscape/mise/clear_queue.py");

system("sudo -S python3 /root/ise-landscape/mise/deployment_journal.py");

?>
