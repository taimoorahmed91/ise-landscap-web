<?php include('includes/database.php'); ?>

<?php
  //Create the select query
  $query ="SELECT * from deployments ORDER BY id";
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
          <h2> ISE Deployments Added </h2>
                <p> Please use this page to provision MISE to fetch information from your ISE Policy </p>
                <table class="table table-striped">
    <tr>
                <th> ID </th>
                <th> ISE FQDN </th>
                <th> Added Date </th>
                <th> Fetched</th>
                <th> Fetched Date</th>
                <th> SRC </th>        
		<th> </th>
	                <th> </th> 
		<th> </th>
                <th> </th>
                </tr>
    <?php 
        //Check if at least one row is found
        if($result->num_rows > 0) {
        //Loop through results
        while($row = $result->fetch_assoc()){
          //Display customer info
          $output ='<tr>';
          $output .='<td>'.$row['id'].'</td>';
          $output .='<td>'.$row['fqdn'].'</td>';
          $output .='<td>'.$row['time'].'</td>';
          $output .='<td>'.$row['fetched'].'</td>';
          $output .='<td>'.$row['fetchedon'].'</td>';
	  $output .='<td>'.$row['src'].'</td>';
	  $output .='<td><a href="verify_deployment.php?id='.$row['id'].'" class="btn btn-success"">Verify Deployment</a></td>';
	  $output .='<td><a href="populate.php?id='.$row['id'].'" class="btn btn-success"">Populate</a></td>';

	  $output .='<td><a href="marked_src.php?id='.$row['id'].'" class="btn btn-success"">SRC</a></td>';
	  $output .='</tr>';
          
          //Echo output
          echo $output;
        }
      } else {
        echo "Sorry, no entries were found";
      }
      ?>
                 
                </table>

       

      <footer class="footer">
        <p>&copy; 2023 TaiAhmed Labwork</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
