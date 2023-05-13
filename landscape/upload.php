<?php include('includes/database.php'); ?>

<?php
  //Create the select query
  $query ="SELECT * from uploads ORDER BY id";
  //Get results
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html lang="en">
  <head >

        <style type="text/css">
            h1
            {
             font-size:150px;   
            }
        </style>
    </head>
    <body bgcolor="#349" text="white" onload="startTime()">
        <br>
        <h1 align="right">
            <span id="txt"></span>
        </h1>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>MISE Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">Taiahmed ISE Landscape Testing</h3>
      </div>

      <div class="row marketing">

        <div class="col-lg-12">
          <h2> Files Added History </h2>

                <table class="table table-striped">
    <tr>
                <th> ID </th>
                <th> File Name </th>
                <th> Description </th>
                <th> Upload Time</th>
                </tr>
    <?php 
        //Check if at least one row is found
        if($result->num_rows > 0) {
        //Loop through results
        while($row = $result->fetch_assoc()){
          //Display customer info
          $output ='<tr>';
	  $output .='<td>'.$row['id'].'</td>';
	  $output .='<td> <a href="./configs/uploads/'.$row['name'].'"">'.$row['name'].'</a></td>';
          $output .='<td>'.$row['description'].'</td>';
          $output .='<td>'.$row['time'].'</td>';

          $output .='</tr>';
          
          //Echo output
          echo $output;
        }
      } else {
        echo "Sorry, no entries were found";
      }
      ?>
                 
                </table>



<?php



  header( "refresh:5;url=http://10.48.30.213/landscape/upload.php" );

	// Database configuration
    $host = 'localhost';
    $username = 'root';
    $password = 'C1sc0123@';
    $database = 'mise';

    // Create a database connection
    $conn = mysqli_connect($host, $username, $password, $database);

    // Check if the database connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $targetDirectory = "./configs/uploads/"; // Specify the directory where you want to store the uploaded files

        // Get the name of the uploaded file
        $fileName = basename($_FILES["fileToUpload"]["name"]);

        // Specify the path where the file should be saved
        $targetPath = $targetDirectory . $fileName;

        // Check if file already exists
        if (file_exists($targetPath)) {
            echo "File already exists. Please choose a different file.";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetPath)) {
                // File upload successful, now insert the file name and description into the database
                $description = $_POST['description'];
                $sql = "INSERT INTO uploads (name, description) VALUES ('$fileName', '$description')";
                if (mysqli_query($conn, $sql)) {
                    echo "The file " . $fileName . " has been uploaded and the details have been entered into the database.";
                } else {
                    echo "Sorry, there was an error inserting the file details into the database.";
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    // Close the database connection
    mysqli_close($conn);
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="50"></textarea>
        <br><br>
        <input type="submit" value="Upload File" name="submit">
    </form>






























      <footer class="footer">
        <p>&copy; 2023 TaiAhmed Labwork</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
