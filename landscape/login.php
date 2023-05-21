<?php
// Database connection details
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'C1sc0123@';
$db_name = 'mise';

// Function to retrieve RADIUS server details from MySQL database
function getRadiusServerDetails()
{
    global $db_host, $db_username, $db_password, $db_name;

    // Create a database connection
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve RADIUS server details from the database
    $sql = "SELECT hostname, radiuskey FROM radius where active ='yes'";
    $result = mysqli_query($conn, $sql);

    // Check if a row was returned
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row; // Return the server details as an associative array
    } else {
        return false; // Return false if no server details found
    }

    mysqli_close($conn);
}

// Function to authenticate the user using RADIUS
function authenticateUser($username, $password)
{
    $radius_server_details = getRadiusServerDetails();

    if ($radius_server_details === false) {
        die('Unable to retrieve RADIUS server details from the database.');
    }

    $radius_server = $radius_server_details['hostname'];
    $radius_secret = $radius_server_details['radiuskey'];

    $radius = radius_auth_open();

    // Set RADIUS server details
    radius_add_server($radius, $radius_server, 1812, $radius_secret, 5, 3);

    // Set RADIUS attributes (if needed)
    radius_create_request($radius, RADIUS_ACCESS_REQUEST);
    radius_put_attr($radius, RADIUS_USER_NAME, $username);
    radius_put_attr($radius, RADIUS_USER_PASSWORD, $password);

    // Send RADIUS request and get response
    $result = radius_send_request($radius);

    // Check authentication result
    if ($result === RADIUS_ACCESS_ACCEPT) {
        // Authentication successful
        session_start(); // Start PHP session
        $_SESSION['login'] = true; // Set session key to "login"
        return true;
    } else {
        // Authentication failed
        return false;
    }

    radius_close($radius);
}

// Handle form submission
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (authenticateUser($username, $password)) {
        // Redirect to the authenticated page
        header('Location: index.php');
        exit();
    } else {
        // Display error message
        $error = 'Invalid credentials. Please try again.';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 97%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="password"]:focus {
            border-color: #888;
            outline: none;
        }

        .form-group input[type="submit"] {
	    background-color: #5E88AF;
	    width: 101%;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group input[type="submit"]:hover {
            background-color: #151019;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($error)) : ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>

