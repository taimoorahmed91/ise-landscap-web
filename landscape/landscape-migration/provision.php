<?php include('includes/database.php'); ?>
<?php
  if($_POST){
    //Get variables from post array
          $fqdn = $_POST['fqdn'];
          $credentials = $_POST['credentials'];
    
    //Create customer query
    $query ="INSERT INTO deployments (credentials,fqdn)
                VALUES ('$credentials','$fqdn')";
    //Run query
    $mysqli->query($query);
    
    
    $msg='Entry Added';
    header('Location: deployments.php');
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISE Deployment Provision Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    </head>
  <body>
   <div class="container">
      <div class="header">
         <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            </ul>
        <h3 class="text-muted">Taimoor Ahmed ISE Landscape Testing</h3>
      </div>
      <div class="row marketing">
        <div class="col-lg-12">
          <h2> Add - ISE Deployment </h2>
          <p> Please use this to add your deployment only  </p>
                <form role="form" method="post" action="provision.php">
      <div class="form-group">
        <label>ISE Node FQDN</label>
        <input name="fqdn" type="text" class="form-control" placeholder="Enter ISE node FQDN">
      </div>
         <div class="form-group">
        <label>Base 64 Credentials</label>
        <input name="credentials" type="text" class="form-control" placeholder="Enter Base64 Credentials">
      </div>
      <input type="submit" class="btn btn-default" value="Add ISE Deployment" />
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
