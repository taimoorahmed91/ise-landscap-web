<?php include('includes/database.php'); ?>

<?php
  // Create the select query
  $query = "SELECT SUM(table_rows) AS percentage FROM information_schema.tables WHERE table_schema = 'mise'";
  // Get results
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $percentage_total = $row['percentage'];
  } else {
    $percentage_total = 0; // Default value if no data is found
  }
?>



<?php
  // Create the select query
  $query = "SELECT COUNT(*) as percentage from ap";
  // Get results
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $percentage_ap = $row['percentage'];
  } else {
    $percentage_ap = 0; // Default value if no data is found
  }
?>


<?php
  // Create the select query
  $query = "SELECT COUNT(*) as percentage from dacl";
  // Get results
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $percentage_dacl = $row['percentage'];
  } else {
    $percentage_dacl = 0; // Default value if no data is found
  }
?>
<?php
  // Create the select query
  $query = "SELECT COUNT(*) as percentage from authz";
  // Get results
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $percentage_authz = $row['percentage'];
  } else {
    $percentage_authz = 0; // Default value if no data is found
  }
?>

<?php
  // Create the select query
  $query = "SELECT COUNT(*) as percentage from sgt";
  // Get results
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $percentage_sgt = $row['percentage'];
  } else {
    $percentage_sgt = 0; // Default value if no data is found
  }
?>

<?php
  // Create the select query
  $query = "SELECT COUNT(*) as percentage from nad";
  // Get results
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $percentage_nad = $row['percentage'];
  } else {
    $percentage_nad = 0; // Default value if no data is found
  }
?>
<?php
  // Create the select query
  $query = "SELECT COUNT(*) as percentage from policyset";
  // Get results
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $percentage_policyset = $row['percentage'];
  } else {
    $percentage_policyset = 0; // Default value if no data is found
  }
?>

<?php
  // Create the select query
  $query = "SELECT COUNT(*) as percentage from authentication";
  // Get results
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $percentage_authentication = $row['percentage'];
  } else {
    $percentage_authentication = 0; // Default value if no data is found
  }
?>

<?php
  // Create the select query
  $query = "SELECT COUNT(*) as percentage from authorization";
  // Get results
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $percentage_authorization = $row['percentage'];
  } else {
    $percentage_authorization = 0; // Default value if no data is found
  }
?>

<?php


$ap_value = round(($percentage_ap / $percentage_total) * 100);

echo "The result is: " . $ap_value;
?>