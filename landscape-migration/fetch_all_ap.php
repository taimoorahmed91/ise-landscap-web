<?php include('includes/database.php'); ?>

<?php
$scripts = array("ap_data");


header( "refresh:1;url=http://10.48.30.213/landscape/ap.php" );



// Create the select query
$query = "SELECT fqdn FROM deployments WHERE src ='yes'";

// Get results
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

if ($result = $mysqli->query($query)) {
    // Fetch object array
    while ($row = $result->fetch_assoc()) {
        $fqdn = $row['fqdn'];

        // Execute each script
        foreach ($scripts as $scriptName) {
            $lockFilePath = __DIR__ . '/locks/' . $scriptName . '.lock';

            // Check if the lock file exists
            if (file_exists($lockFilePath)) {
                die("Another instance of '{$scriptName}' is already running.");
            }

            // Create the lock file
            file_put_contents($lockFilePath, '');

            // Execute the Python script
            if ($scriptName === "policyset_data") {
                $command = "sudo -S python3 /root/ise-landscape/mise/{$scriptName}.py " . escapeshellarg($fqdn) . " " . $id;
            } else {
                $command = "sudo -S python3 /root/ise-landscape/mise/{$scriptName}.py " . escapeshellarg($fqdn);
            }
            system($command);

            // Delete the lock file
            unlink($lockFilePath);
        }
    }
    // Free Result set
    $result->close();
}
              
?>
