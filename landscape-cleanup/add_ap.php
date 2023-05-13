<?php include('includes/database.php'); ?>
<?php
  if($_POST){
    //Get variables from post array
    $ap = $_POST['ap'];
    
    //Create customer query
    $query ="INSERT INTO ap (ap)
                VALUES ('$ap')";
    //Run query
    $mysqli->query($query);
    
    
    $msg='Entry Added';
    header('Location: ap.php');
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AuthZ Dashboard</title>
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
          <h2> Add - Allowed Protocols </h2>
	        <form role="form" method="post" action="add_ap.php">
      <div class="form-group">
        <label>Allowed Protocol profile Name</label>
        <input name="ap" type="text" class="form-control" placeholder="Enter Allowed Protocol Name">
      </div>
      <input type="submit" class="btn btn-default" value="Add AP Name" />
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
