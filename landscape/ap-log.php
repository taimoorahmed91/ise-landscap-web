<!DOCTYPE html>
<html>
<head>
    <title>MISE Logs Viewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        pre {
            background-color: #f5f5f5;
            padding: 10px;
            overflow: auto;
        }
    </style>
</head>
<body>
    <h1>ap Error Logs</h1>

    <?php

header( "refresh:2;url=http://10.48.30.213/landscape/ap-log.php" );



$logFilePath = '/var/www/html/landscape/logging/ap-logs';
$command = 'sudo tail -50 ' . $logFilePath;
$logContent = shell_exec($command);
echo '<pre>' . htmlspecialchars($logContent) . '</pre>';







?>
</body>
</html>