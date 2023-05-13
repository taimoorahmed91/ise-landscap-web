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
      header('Content-Disposition: attachment; filename=dacl-profiles.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('No', 'DACL Name', 'Authorization Profile', 'Creation Time', 'Expired', 'Post HTTP code', 'Put HTTP code'));  
       $query ="SELECT no,dacl,authz,time,expired,code_post,code_put

       FROM temp";

      $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>
