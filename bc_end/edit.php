<?php 
          $connect = mysqli_connect("localhost", "root", "Meas1122", "project_pi");
         if(isset($_POST["id"]))  
         {  
              $query = "SELECT * FROM booking WHERE id = '".$_POST["id"]."'";
              $result = mysqli_query($connect, $query);  
              $row = mysqli_fetch_array($result);  
              echo json_encode($row);  
         }  
 ?>