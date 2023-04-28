<?php include('includes/database.php'); ?>

<?php
session_start ();
if(!isset($_SESSION["login"]))

        header("location:login.php");
?>

<?php
  if($_POST){
    //Get variables from post array
    $mac = $_POST['mac'];
    $allow = $_POST['allow'];
    $allow_life = $_POST['allow_life'];
    $project = $_POST['project'];
    $ipsk = $_POST['ipsk'];
    $sgt = $_POST['sgt'];
    $critical = $_POST['critical'];

    //Create customer query
    $query ="INSERT INTO odbc (mac,allow,allow_life,project,ipsk,sgt,critical)
                VALUES ('$mac','$allow','$allow_life','$project','$ipsk','$sgt','$critical')";
    //Run query
    $mysqli->query($query);


    $msg='Entry Added';
    header('Location: mac.php');
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Endpoint Dashboard</title>
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
          <h2> Add - MAC Address </h2>
                <form role="form" method="post" action="add_mac.php">
      <div class="form-group">
        <label>ADD MAC Address (xx:xx:xx:xx:xx:xx)</label>
        <input name="mac" type="text" class="form-control" placeholder="Enter MAC Address Name">
      </div>
      <div class="form-group">
        <label>Allow List (Yes/No)</label>
        <input name="allow" type="text" class="form-control" placeholder="Is MAC Address implicit allowed?">
      </div>
      <div class="form-group">
        <label>Allow Liftime (EPOCH Value)</label>
        <input name="allow_life" type="text" class="form-control" placeholder="Allowed MAC lifetime">
      </div>
      <div class="form-group">
        <label>Project Name</label>
        <input name="project" type="text" class="form-control" placeholder="Enter Project Name">
      </div>
      <div class="form-group">
        <label>ADD iPSK Value </label>
        <input name="ipsk" type="text" class="form-control" placeholder="Enter iPSK Value">
      </div>
      <div class="form-group">
        <label>ADD SGT </label>
        <input name="sgt" type="text" class="form-control" placeholder="Enter SGT Value">
      </div>
      <div class="form-group">
        <label>Critical (yes/no)</label>
        <input name="critical" type="text" class="form-control" placeholder="Is this buisness critical">
      </div>
      <input type="submit" class="btn btn-default" value="Add Endpoint" />
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
~                                         
