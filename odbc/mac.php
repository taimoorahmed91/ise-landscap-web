<?php include('includes/database.php'); ?>
<?php
session_start ();
if(!isset($_SESSION["login"]))

        header("location:login.php");
?>



<?php
  //Create the select query
  $query ="SELECT * from odbc ORDER BY id";
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
    

    <title>Store Dashboard</title>

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
            <li role="presentation"><a href="add_mac.php">Add Endpoint</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">Taiahmed ISE Landscape Testing</h3>
      </div>

      <div class="row marketing">

        <div class="col-lg-12">
          <h2> Endpoint Asset Table </h2>
                <table class="table table-striped">
    <tr>
                <th> ID </th>
                <th> MAC </th>
                <th> Allow List </th>
                <th> Allow Lifetime </th>
                <th> Project Name </th>
                <th> iPSK Value </th>
                <th> SGT </th>
                <th> Crtical </th>
                <th> Timestamp </th>
		<th> Expiry</th>
		<th> CoA Code </th>       
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
          $output .='<td>'.$row['mac'].'</td>';
          $output .='<td>'.$row['allow'].'</td>';
          $output .='<td>'.$row['allow_life'].'</td>';
          $output .='<td>'.$row['project'].'</td>';
          $output .='<td>'.$row['ipsk'].'</td>';
          $output .='<td>'.$row['sgt'].'</td>';
          $output .='<td>'.$row['critical'].'</td>';
          $output .='<td>'.$row['time'].'</td>';
	  $output .='<td>'.$row['expired'].'</td>';
          $output .='<td>'.$row['coa_code'].'</td>';
          $output .='<td><a href="coa.php?id='.$row['id'].'" class="btn btn-success"">CoA</a></td>';
	  $output .='<td><a href="expired.php?id='.$row['id'].'" class="btn btn-success"">Expired</a></td>';
	  $output .='<td><a href="delete_mac.php?id='.$row['id'].'" class="btn btn-success"">Delete</a></td>';
	  $output .='</tr>';
          
          //Echo output
          echo $output;
        }
      } else {
        echo "Sorry, no entries were found";
      }
      ?>
                 
                </table>

            <form method="post" action="export_endpoint.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>   

      <footer class="footer">
        <p>&copy; 2023 TaiAhmed Labwork</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
