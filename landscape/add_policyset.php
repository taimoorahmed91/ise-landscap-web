<?php include('includes/database.php'); ?>
<?php
  if($_POST){
    //Get variables from post array
    $policyset = $_POST['policyset'];
    
    //Create customer query
    $query ="INSERT INTO policyset (name)
                VALUES ('$policyset')";
    //Run query
    $mysqli->query($query);
    
    
    $msg='Entry Added';
    header('Location: policyset.php');
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
	        <form role="form" method="post" action="add_policyset.php">
      <div class="form-group">
        <label>Policy Set profile Name</label>
        <input name="policyset" type="text" class="form-control" placeholder="Enter Policyset Name">
      </div>
      <input type="submit" class="btn btn-default" value="Add Policyset Name" />
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
