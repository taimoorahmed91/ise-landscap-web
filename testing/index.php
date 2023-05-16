<!DOCTYPE html>
<html>
<head>
    <title>Beautiful Boxes</title>
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        h1 {
            color: #fff;
            font-size: 36px;
            text-align: center;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .quadrant {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            width: 200px;
            height: 200px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            margin: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .box:hover {
            transform: scale(1.05);
        }

        .box h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .box ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .box li {
            margin-bottom: 10px;
        }

        .box li a {
            color: #555;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .box li a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Beautiful Boxes</h1>
        <div class="quadrant">
            <div class="box">
                <h2>Box 1</h2>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </div>
            <div class="box">
                <h2>Box 2</h2>
                <ul>
                    <li><a href="#">Link 4</a></li>
                    <li><a href="#">Link 5</a></li>
                    <li><a href="#">Link 6</a></li>
                </ul>
            </div>
        </div>
        <div class="quadrant">
            <div class="box">
                <h2>Box 3</h2>
                <ul>
                    <li><a href="#">Link 7</a></li>
                    <li><a href="#">Link 8</a></li>
                    <li><a href="#">Link 9</a></li>
                </ul>
            </div>
            <div class="box">
                <h2>Box 4</h2>
                <ul>
                    <li><a href="#">Link 10</a></li>
                <li><a href="#">Link 11</a></li>
                <li><a href="#">Link 12</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
