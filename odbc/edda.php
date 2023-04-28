<?php 

    header("Content-Type:application/json");

    try {
            $database_name     = 'landscape';
            $database_user     = 'root';
            $database_password = 'C1sc0123@';
            $database_host     = 'localhost';

            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);          

            $sql = 'select *              
                    from odbc
                    ';           

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
           
            $data = [];

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                 $data[] = $row;  
            } 

           $response         = [];
           $response['data'] =  $data;

           echo json_encode($response, JSON_PRETTY_PRINT);

        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }        
