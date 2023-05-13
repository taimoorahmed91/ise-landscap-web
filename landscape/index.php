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
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
	    <li role="presentation" class="active"><a href="http://landscape.taimoorlab.pk">Home</a></li>
	    <li role="presentation"><a href="provision.php"> Provision</a></li>
	    <li role="presentation"><a href="deployments.php"> Deployment</a></li>
            <li role="presentation"><a href="policyset.php"> Policy Set</a></li>
            <li role="presentation"><a href="dacl.php"> DACL</a></li>
            <li role="presentation"><a href="upload.php"> Upload</a></li>
            <li role="presentation"><a href="authz.php"> AuthZ</a></li>
	            <li role="presentation"><a href="sgt.php"> SGT</a></li>    
                    <li role="presentation"><a href="ap.php"> AP</a></li>	

		    <li role="presentation"><a href="nad.php">NAD Group</a></li>
</ul>



        </nav>
        <h3 class="text-muted">Taimoor Ahmed Landscape Testing</h3>
      </div>

      <div class="row marketing">

        <div class="col-lg-6">
          <h2> Landing Page only </h2>





      <footer class="footer">
        <p>&copy; 2023 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

