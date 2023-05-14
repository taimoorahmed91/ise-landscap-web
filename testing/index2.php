<!DOCTYPE html>
<html>
<head>
    <title>PHP Page with Background Image and Boxes</title>
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            width: 200px;
            height: 200px;
            background-color: white;
            margin: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h3>Box 1</h3>
            <select>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>
        <div class="box">
            <h3>Box 2</h3>
            <select>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>
        <div class="box">
            <h3>Box 3</h3>
            <select>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>
        <div class="box">
            <h3>Box 4</h3>
            <select>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>
    </div>
</body>
</html>

