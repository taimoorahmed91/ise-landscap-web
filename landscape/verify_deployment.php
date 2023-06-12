<?php include('includes/database.php'); ?>

<?php
header("refresh: 1; url=http://10.48.30.213/landscape/deployments.php");

// Assign get variable
$id = $_GET['id'];

// Create the select query
$query = "SELECT * FROM deployments WHERE id = $id";

// Get results
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

if ($result = $mysqli->query($query)) {
    // Fetch object array
    while ($row = $result->fetch_assoc()) {
        $fqdn = $row['fqdn'];
    }
    // Free result set
    $result->close();
}

$command = "sudo -S python3 /root/ise-landscape/mise/verify_deployment.py '$fqdn'";
$output = shell_exec($command);

// Check the output and send appropriate response
if (strpos($output, "version") !== false) {
    http_response_code(200);
    echo "<script>alert('Deployment looks good,it is responding to API calls');</script>";
} else {
    http_response_code(500);
    echo "<script>alert('ISE deployment needs checking, check ERS and API Gateway Config');</script>";
}
