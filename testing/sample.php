<?php
// Execute shell command to get RAM information
$command = "free -m";
$output = shell_exec($command);

// Process the output to extract RAM details
$lines = explode("\n", $output);
$memoryLine = explode(" ", $lines[1]);
$swapLine = explode(" ", $lines[2]);

$totalMemory = $memoryLine[1];
$usedMemory = $memoryLine[2];
$freeMemory = $memoryLine[3];
$sharedMemory = $memoryLine[4];
$bufferCacheMemory = $memoryLine[5];
$availableMemory = $memoryLine[6];

$totalSwap = $swapLine[1];
$usedSwap = $swapLine[2];
$freeSwap = $swapLine[3];

// Display the RAM information
echo "Memory Information:<br>";
echo "Total Memory: " . $totalMemory . " MB<br>";
echo "Used Memory: " . $usedMemory . " MB<br>";
echo "Free Memory: " . $freeMemory . " MB<br>";
echo "Shared Memory: " . $sharedMemory . " MB<br>";
echo "Buffer/Cache Memory: " . $bufferCacheMemory . " MB<br>";
echo "Available Memory: " . $availableMemory . " MB<br>";

echo "<br>";

echo "Swap Information:<br>";
echo "Total Swap: " . $totalSwap . " MB<br>";
echo "Used Swap: " . $usedSwap . " MB<br>";
echo "Free Swap: " . $freeSwap . " MB<br>";
?>

