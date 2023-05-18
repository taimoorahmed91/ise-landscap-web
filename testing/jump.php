<?php

function list_files($dir, $indentation = '') {
    $files = scandir($dir);
    
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }
        
        $path = $dir . '/' . $file;
        
        if (is_dir($path)) {
            echo $indentation . '📁 ' . $file . '<br>';
            list_files($path, $indentation . '&nbsp;&nbsp;&nbsp;&nbsp;');
        } else {
            echo $indentation . '📄 ' . $file . '<br>';
        }
    }
}

$directory = '/var/www/html/landscape';

echo "Listing files and folders in directory: $directory <br><br>";

list_files($directory);

?>

