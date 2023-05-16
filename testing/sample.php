<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "C1sc0123@";
$dbname = "mise";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST["description"];
    $name = $_POST["name"];
    $uploadDirectory = $_POST["upload_directory"];
    $file = $_FILES["file"];

    // File upload
    $targetDirectory = "uploads/" . $uploadDirectory . "/";
    $targetFile = $targetDirectory . basename($file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        // File uploaded successfully, insert data into the database
        $sql = "INSERT INTO uploads (name, description, directory) VALUES ('$name', '$description', '$targetFile')";

        if (mysqli_query($conn, $sql)) {
            echo "File uploaded and data inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload with Description and Database</title>
</head>
<body>
    <h1>File Upload with Description and Database</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" required></textarea><br><br>

        <label for="upload_directory">Upload Directory:</label>
        <select name="upload_directory" id="upload_directory">
            <option value="directory1">Directory 1</option>
            <option value="directory2">Directory 2</option>
            <option value="directory3">Directory 3</option>
        </select><br><br>

        <label for="file">File:</label>
        <input type="file" name="file" id="file" required><br><br>

        <input type="submit" value="Upload File">
    </form>
</body>
</html>

