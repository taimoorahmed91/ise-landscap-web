<?php include('includes/database.php'); ?>

<?php  
 $db_host = 'localhost';
$db_name = 'landscape';
$db_user = 'root';
$db_pass = 'C1sc0123@';

//Create mysqli Object
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

      //export.php  
 if(isset($_POST["export"]))  
 {  
      
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=endpoints.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'Endpoint MAC', 'Allow List', 'Allow liftetime', 'Project Name', 'ipsk Value', 'SGT Value', 'Critical', 'Timestamp', 'Expiry'));  
       $query ="SELECT id,mac,allow,allow_life,project,ipsk,sgt,critical,time,expired FROM odbc";

      $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>
