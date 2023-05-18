<!DOCTYPE html>
<html>
<head>
    <title>RADIUS Login</title>
</head>
<body>
    <h2>RADIUS Login</h2>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // RADIUS server configuration
        $radius_server = "ise-proxy.taimoorlab.local";
        $radius_port = 1812;
        $radius_secret = "C1sc0123@";

        // User credentials
        $username = $_POST['username'];
        $password = $_POST['password'];

        // NAS IP address
        $nas_ip_address = "172.17.30.23";

        // Create a RADIUS object
        $radius = radius_auth_open();

        // Add RADIUS server
        radius_add_server($radius, $radius_server, $radius_port, $radius_secret, 5, 3);

        // Set NAS IP address
        radius_put_attr($radius, RADIUS_NAS_IP_ADDRESS, $nas_ip_address);

        // Send Access-Request
        $radius_response = radius_authenticate($radius, $username, $password);

        // Check the RADIUS response
        if ($radius_response === false) {
            // Authentication failed
            echo "<p>Invalid credentials. Please try again.</p>";
        } else {
            // Authentication successful
            echo "<p>Authentication successful.</p>";
        }

        // Close the RADIUS connection
        radius_close($radius);
    }
    ?>
</body>
</html>

