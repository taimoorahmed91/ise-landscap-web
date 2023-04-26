<?php include('includes/database.php'); ?>
<?php
	//Assign get variable
	$no = $_GET['no'];
	
	//Create customer select query
	$query ="SELECT * FROM setup
			 WHERE setup.no = $no";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($result = $mysqli->query($query)){
		//Fetch object array
		while($row = $result->fetch_assoc()) {
			$src = $row['src'];
			$dst = $row['dst'];
			$auth = $row['auth'];

		}
		//Free Result set
		$result->close();
	}
?>
<?php
	if($_POST){
		//Assign GET Variable
		$no = $_GET['no'];
	
		//Assign Variables
		$src = $_POST['src'];
		$dst = $_POST['dst'];
		$auth = $_POST['auth'];

		//Create customer update
		$query = "UPDATE setup
				  SET
				  src='$src',
				  dst='$dst',
				  auth='$auth'

				  WHERE no=$no
				  ";
		$mysqli->query($query) or die();
		

		$msg="Customer Updated";
		header('Location:setup.php?msg='.urlencode($msg).'');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taimoor Ahmed Store Testing | Edit Customer</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li ><a href="index.php">Home</a></li>

        </ul>
        <h3 class="text-muted">Taimoor Ahmed Edit Node</h3>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
         <h2>Edit Node</h2>
		 <form role="form" method="post" action="edit_node.php?no=<?php echo $no; ?>">
			<div class="form-group">
				<label>First Name</label>
				<input name="src" type="text" class="form-control" 
				value="<?php echo $src; ?>" placeholder="Enter First Name">
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input name="dst" type="text" class="form-control" 
				value="<?php echo $dst; ?>" placeholder="Enter Last Name">
			</div>
			<div class="form-group">
				<label>auth address</label>
				<input name="auth" type="text" class="form-control" 
				value="<?php echo $auth; ?>" placeholder="Enter auth">
			</div>


			<input type="submit" class="btn btn-default" value="Update Customer" />
		</form>
        </div>
      </div>

      <div class="footer">
        <p>&copy; Company 2023</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
