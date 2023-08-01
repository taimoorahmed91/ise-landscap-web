<!DOCTYPE html>
<html>
<head>
    <title>Edit File</title>
</head>
<body>
    <h2>Edit File</h2>
    <form method="post">
        <label for="file_name">Enter File Name:</label>
        <input type="text" id="file_name" name="file_name" value="<?php echo htmlspecialchars(isset($_POST['file_name']) ? $_POST['file_name'] : ''); ?>"><br>
        <button type="submit" name="load_btn">Load File</button>
    </form>

    <?php
    $folder = 'sgt'; // Set the folder name to 'SGT'

    function getFileLocation($folder, $fileName) {
        $baseDir = '/var/www/html/mise/v0.1/configs/';
        return $baseDir . 'sgt/' . $fileName;
    }

    if (isset($_POST['load_btn'])) {
        $file_name = $_POST['file_name'];

        if (empty($file_name)) {
            echo "<p>Error: Please enter a file name.</p>";
        } else {
            $file_path = getFileLocation($folder, $file_name);

            if (file_exists($file_path)) {
                // Read the file contents
                $file_contents = file_get_contents($file_path);
                ?>
                <h3>Edit File: <?php echo htmlspecialchars($file_path); ?></h3>
                <form method="post">
                    <textarea name="file_contents" rows="10" cols="50"><?php echo htmlspecialchars($file_contents); ?></textarea><br>
                    <input type="hidden" name="file_path" value="<?php echo htmlspecialchars($file_path); ?>">
                    <label for="new_file_name">Enter New File Name:</label>
                    <input type="text" id="new_file_name" name="new_file_name"><br>
                    <button type="submit" name="save_btn">Save as New File</button>
                </form>
                <?php
            } else {
                echo "<p>Error: The file does not exist.</p>";
            }
        }
    }

    if (isset($_POST['save_btn'])) {
        $file_contents = $_POST['file_contents'];
        $file_path = $_POST['file_path'];
        $new_file_name = $_POST['new_file_name'];

        if (empty($file_contents) || empty($file_path) || empty($new_file_name)) {
            echo "<p>Error: Please fill all fields.</p>";
        } else {
            // Check if the new file name already exists
            $new_file_path = getFileLocation($folder, $new_file_name);

            if (file_exists($new_file_path)) {
                echo "<p>Error: A file with the same name already exists. Please choose a different name.</p>";
            } else {
                // Save the edited contents to the new file
                if (file_put_contents($new_file_path, $file_contents) !== false) {
                    echo "<p>File has been successfully saved as: " . htmlspecialchars($new_file_name) . "</p>";
                } else {
                    echo "<p>Error: Unable to save the file. Please check the file path and permissions.</p>";
                }
            }
        }
    }
    ?>
</body>
</html>
