<?php include('includes/database.php'); ?>
<?php
  if($_POST){
    //Get variables from post array
          $radius = $_POST['radius'];
          $radiuskey = $_POST['radiuskey'];
    
    //Create customer query
    $query ="INSERT INTO radius (radiuskey,hostname)
                VALUES ('$radiuskey','$hostname')";
    //Run query
    $mysqli->query($query);
    
    
    $msg='Entry Added';
    header('Location: external_auth.php');
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MISE Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    </head>
  <body>
   <div class="container">
      <div class="header">
         <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="radius.php">RADIUS</a></li>
            </ul>
        <h3 class="text-muted">Taimoor Ahmed ISE Landscape Testing</h3>
      </div>
      <div class="row marketing">
        <div class="col-lg-12">
          <h2> Add - External Auth </h2>
                <form role="form" method="post" action="add_radius.php">
      <div class="form-group">
        <label>ISE Node radius</label>
        <input name="hostname" type="text" class="form-control" placeholder="Enter ISE node radius">
      </div>
         <div class="form-group">
        <label>RADIUS Key</label>
        <input name="radiuskey" type="text" class="form-control" placeholder="Enter radiuskey">
      </div>
      <input type="submit" class="btn btn-default" value="Add external auth" />
    </form>
        </div>
      </div>
      <div class="footer">
      </div>
    </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
