<?php include('includes/database.php'); ?>

<?php
  //Create the select query
  $query ="SELECT * from sgt ORDER BY id";
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
          <h2> SGTs which were fetched </h2>
                <table class="table table-striped">
    <tr>
                <th> ID </th>
                <th> sgt Name </th>
                <th> SRC ISE FQDN </th>
                <th> Queue </th>
                <th> GET Code</th>
                <th> POST Code</th>
                <th> PUT Code </th>       
                <th> Queue</th>
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
          $output .='<td> <a href="./configs/sgt/'.$row['sgtid'].'"">'.$row['sgt'].'</a></td>';
          $output .='<td>'.$row['isename'].'</td>';
                    $output .='<td>'.$row['queue'].'</td>';
          $output .='<td>'.$row['get_code'].'</td>';
          $output .='<td>'.$row['post_code'].'</td>';
          $output .='<td>'.$row['put_code'].'</td>';
          $output .='<td><a href="sgt_add_queue.php?id='.$row['id'].'" class="btn btn-success"">+</a> <a href="sgt_remove_queue.php?id='.$row['id'].'" class="btn btn-success"">-</a></td>';
          $output .='<td><a href="download_sgt.php?id='.$row['sgtid'].'" class="btn btn-success"">Download</a></td>';
          $output .='<td><a href="resync_sgt.php?id='.$row['id'].'" class="btn btn-success"">Resync</a></td>';
	  $output .='</tr>';
          
          //Echo output
          echo $output;
        }
      } else {
        echo "Sorry, no entries were found";
      }
      ?>
                 
                </table>

      
         <p> </p>
         <p> </p>
         <p> </p>
         <p> </p>
         <p> </p>
         <p> </p>

           <form method="post" action="fetch_all_sgt.php">
                     <input type="submit" name="export" value="Fetch All From Source" class="btn btn-success" />
                </form>
            
         <p> </p>
         <p> </p>
         <p> </p>
        

         <p> </p>
         <p> </p>
         <p> </p>
         <p> </p>
         <p> </p>
         <p> </p> 

      <footer class="footer">
        <p>&copy; 2023 TaiAhmed Labwork</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
