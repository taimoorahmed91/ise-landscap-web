<?php include('includes/database.php'); ?>
<?php

  // Connect to database
    $con = mysqli_connect("localhost","root","C1sc0123@","mise");
     
    // Get all the categories from category table
    $sql = "SELECT policyset FROM policyset WHERE isename IN ( SELECT fqdn FROM deployments WHERE marked = 'yes' ) GROUP BY policyset HAVING COUNT(DISTINCT isename) = ( SELECT COUNT(DISTINCT fqdn) FROM deployments WHERE marked = 'yes' )";
    $all_policyset = mysqli_query($con,$sql);


   if($_POST){
    //Get variables from post array
          $comments = $_POST['comments'];
          $selectedpolicyset  = $_POST['selectedpolicyset'];
    
    //Create customer query
    $query ="INSERT INTO policysetdeploy (comments,selectedpolicyset)
                VALUES ('$comments','$selectedpolicyset')";
    //Run query
    $mysqli->query($query);
    
      $msg='Entry Added';
      header('Location: deployment_phase1.php');
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
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            </ul>
        <h3 class="text-muted">MISE Testing</h3>
      </div>
      <div class="row marketing">
        <div class="col-lg-12">
          <h2> Policy Set Selection </h2>
<p> Please select the policy set to which your selected authentication and authorization rule would be pushed  </p>
                <form role="form" method="post" action="deployment_phase2.php">

         <div class="form-group">
        <label>Deployment Comments</label>
        <input name="comments" type="text" class="form-control" placeholder="Enter Comments to go with deployment">
      </div>


       <div class="form-group">
        <label>Common Policy Sets from the marked deployments</label>
        <select name="selectedpolicyset">
            <?php
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_policyset,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["policyset"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $category["policyset"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
        </select>
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
