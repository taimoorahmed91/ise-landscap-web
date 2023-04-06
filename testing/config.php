<?php

$databaseHost = '127.0.0.1';//or localhost
$databaseName = 'landscape'; // your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = 'C1sc0123@';  // by defualt empty for localhost

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
?>
