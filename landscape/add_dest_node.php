<?php include('includes/database.php'); ?>
<?php
  if($_POST){
    //Get variables from post array
          $dstise = $_POST['dstise'];
          $dstpolicyset = $_POST['dstpolicyset'];
          $sourceauthentication  = $_POST['sourceauthentication'];
    
    //Create customer query
    $query ="INSERT INTO replicateauthentication (dstise,dstpolicyset,sourceauthentication)
                VALUES ('$dstise','$dstpolicyset','$sourceauthentication')";
    //Run query
    $mysqli->query($query);
    
    
    $msg='Entry Added';
    header('Location: replicateauthentication.php');
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Policy Set Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    </head>
  <body>
   <div class="container">
      <div class="header">
         <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="policyset.php"> Policy Set</a></li>
            </ul>
        <h3 class="text-muted">Taimoor Ahmed ISE Landscape Testing</h3>
      </div>
      <div class="row marketing">
        <div class="col-lg-12">
          <h2> Add - Authentication Replication Info </h2>
<p> Please use this to add your destination ISE node that will accept the JSON Data  </p>
                <form role="form" method="post" action="add_dest_node.php">
      <div class="form-group">
        <label>ISE Node FQDN</label>
        <input name="dstise" type="text" class="form-control" placeholder="Enter ISE node FQDN">
      </div>
         <div class="form-group">
        <label>Policy Set profile Name</label>
        <input name="dstpolicyset" type="text" class="form-control" placeholder="Enter Policy Set Name">
      </div>
         <div class="form-group">
        <label>Source Authentication ID</label>
        <input name="sourceauthentication" type="text" class="form-control" placeholder="Enter ID from the source profile">
      </div>
      <input type="submit" class="btn btn-default" value="Add replication info" />
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
