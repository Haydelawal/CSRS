<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
      $id = $_GET['deleteid'];

      $sql = "delete from `report` where id=$id";
      $result = mysqli_query($con, $sql);
      if($result){
        echo '<script>alert("Data Deletion Successful")</script>';  
        header('Location: http://localhost/ayodeji/admin/deletereport.php');
    }else {
        die(mysqli_error($con));

      }


}

?>