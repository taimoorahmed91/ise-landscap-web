<?php include('includes/database.php'); ?>
<?php include('tracker.php'); ?>


<?php

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

// Set default alert class and message
$alertClass = 'alert--info';
$alertMessage = '';

// Check the output and send appropriate response
if (strpos($output, "version") !== false) {
    http_response_code(200);
    $alertClass = 'alert--success';
    $alertMessage = 'Deployment looks good, it is responding to API calls';
} else {
    http_response_code(500);
    $alertClass = 'alert--error';
    $alertMessage = 'ISE deployment needs checking, check ERS and API Gateway Config';
}

echo '<script>
    setTimeout(function() {
        alert("' . $alertMessage . '");
        window.history.go(-1);
    }, 0);
</script>';

?>

