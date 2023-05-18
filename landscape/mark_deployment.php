<?php

  header( "refresh:1;url=http://10.48.30.213/landscape/deployment_phase1.php" );

// Replace the database credentials with your own
$servername = "localhost";
$username = "root";
$password = "C1sc0123@";
$dbname = "mise";

// Establish a database connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the ID is provided in the GET request
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Update the "marked" column in the "deployments" table for the specified ID
  $query = "UPDATE deployments SET marked = CASE WHEN marked = 'yes' THEN 'no' ELSE 'yes' END WHERE id = $id";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Error updating column 'marked' for ID: $id - " . mysqli_error($connection));
  }
} else {
  die("ID not provided in the GET request.");
}

// Close the database connection
mysqli_close($connection);
?>

