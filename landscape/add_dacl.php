<?php include('includes/database.php'); ?>
<?php
  if($_POST){
    //Get variables from post array
    $dacl = $_POST['dacl'];
    
    //Create customer query
    $query ="INSERT INTO temp (dacl)
                VALUES ('$dacl')";
    //Run query
    $mysqli->query($query);
    
    
    $msg='Entry Added';
    header('Location: dacl.php');
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
        <h3 class="text-muted">Taimoor Ahmed Store Testing</h3>
      </div>
      <div class="row marketing">
        <div class="col-lg-12">
          <h2> Add - Authorization Profile </h2>
	        <form role="form" method="post" action="add_dacl.php">
      <div class="form-group">
        <label>DACL Name</label>
        <input name="dacl" type="text" class="form-control" placeholder="Enter DAC: Name">
      </div>
      <input type="submit" class="btn btn-default" value="Add DACL" />
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
