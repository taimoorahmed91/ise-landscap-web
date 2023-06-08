<?php include('includes/database.php'); ?>
<?php

header("refresh:5;url=http://10.48.30.213/landscape/checkout.php");

// Script to fetch policyset authentication
$query_deploy = "SELECT fqdn FROM deployments WHERE dest = 'yes' LIMIT 1";
$result_deploy = $mysqli->query($query_deploy) or die($mysqli->error.__LINE__);

if ($row = $result_deploy->fetch_assoc()) {
    $fqdn = $row['fqdn'];
}

// Process dacl
$query_dacl = "SELECT id, daclid FROM dacl WHERE queue = 'yes'";
$result_dacl = $mysqli->query($query_dacl) or die($mysqli->error.__LINE__);

while ($row = $result_dacl->fetch_assoc()) {
    $id = $row['id'];
    $daclid = $row['daclid'];
    system("sudo -S python3 /root/ise-landscape/mise/post_dacl.py '$id' '$fqdn' '$daclid'");
}

// Process authz
$query_authz = "SELECT id, authzid FROM authz WHERE queue = 'yes'";
$result_authz = $mysqli->query($query_authz) or die($mysqli->error.__LINE__);

while ($row = $result_authz->fetch_assoc()) {
    $id = $row['id'];
    $authzid = $row['authzid'];
    system("sudo -S python3 /root/ise-landscape/mise/post_authz.py '$id' '$fqdn' '$authzid'");
}

// Process ap
$query_ap = "SELECT id, apid FROM ap WHERE queue = 'yes'";
$result_ap = $mysqli->query($query_ap) or die($mysqli->error.__LINE__);

while ($row = $result_ap->fetch_assoc()) {
    $id = $row['id'];
    $apid = $row['apid'];
    system("sudo -S python3 /root/ise-landscape/mise/post_ap.py '$id' '$fqdn' '$apid'");
}

// Process nad
$query_nad = "SELECT id, nadid FROM nad WHERE queue = 'yes'";
$result_nad = $mysqli->query($query_nad) or die($mysqli->error.__LINE__);

while ($row = $result_nad->fetch_assoc()) {
    $id = $row['id'];
    $nadid = $row['nadid'];
    system("sudo -S python3 /root/ise-landscape/mise/post_nad.py '$id' '$fqdn' '$nadid'");
}

// Process sgt
$query_sgt = "SELECT id, sgtid FROM sgt WHERE queue = 'yes'";
$result_sgt = $mysqli->query($query_sgt) or die($mysqli->error.__LINE__);

while ($row = $result_sgt->fetch_assoc()) {
    $id = $row['id'];
    $sgtid = $row['sgtid'];
    system("sudo -S python3 /root/ise-landscape/mise/post_sgt.py '$id' '$fqdn' '$sgtid'");
}

$result_deploy->close();
$result_dacl->close();
$result_authz->close();
$result_ap->close();
$result_nad->close();
$result_sgt->close();

