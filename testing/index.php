<!DOCTYPE html>
<html>
<head>
    <title>Landing Page with Banner and Background Image</title>
    <style>
        /* CSS for layout */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('background.jpg'); /* Replace 'background.jpg' with the path to your background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .banner {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .options {
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
        }

        .options ul {
            list-style-type: none;
            padding: 0;
        }

        .options li {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .options li:before {
            content: "\2022";
            color: #333;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
    </style>
</head>
<body>
    <div class="banner">
        <h1>Welcome to Our Landing Page</h1>
    </div>
    <div class="container">
        <div class="options">
            <h2>Explore our options:</h2>
	    <ul>
		<li><a style = "color:#333"  href="dacl.php"> DACL </a></li>
                <li>Option 2</li>
                <li>Option 3</li>
                <li>Option 4</li>
            </ul>
        </div>
    </div>
</body>
</html>

