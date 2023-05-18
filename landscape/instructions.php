<?php 
session_start ();
if(!isset($_SESSION["login"]))
    header("location:login.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taimoor's Dashboard</title>
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
  <style>
    /* Add your custom CSS styles here */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f2f2f2;
    }

    .container {
      text-align: center;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
      font-size: 28px;
      margin-bottom: 20px;
    }

    .footer {
      margin-top: 20px;
      color: #888;
    }

    .centered-image {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .centered-image img {
      width: 250%;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header clearfix">
      <nav>
        <ul class="nav nav-pills pull-right">
          <li role="presentation" class="active"><a href="index.php">Home</a></li>
        </ul>
      </nav>
      <h3 class="text-muted">MISE Landscape Testing</h3>
    </div>

    <div class="row marketing">
      <div class="col-lg-6">
        <h2>Instructions Page only</h2>
        <div class="centered-image">
          <img src="inst.jpg" alt="Instructions Image">
        </div>
      </div>
    </div>

    <footer class="footer">
      <p>&copy; 2023 Company, Inc.</p>
    </footer>
  </div> <!-- /container -->

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

