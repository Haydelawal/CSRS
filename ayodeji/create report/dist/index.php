<?php

include 'connect.php';

           

if(isset($_POST['submit'])){


  
  $writer = $_POST['writer'];
  $date = $_POST['date'];

  $title = $_POST['title'];

  $main = $_POST['main'];
  


  $sql = "insert into `report` (writer,date,title,main)

values   ('$writer','$date','$title','$main') ";
$result = mysqli_query($con,$sql);

if($result) {

  echo "<script>alert('Data Insertion Succesful');</script>";
  // header('Location: http://localhost/bolaji/dist/work.php');

}else{
  die(mysqli_error($con));
}

}

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CREATE REPORT</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<form method="post">
<div class="container">
    <p>CREATE REPORT</p>
    
    <div class="login">
      <input type="hidden" value="ADMIN" placeholder="Name Of Writer" required class="input" name="writer">
      <input type="date" placeholder="Date Of Creation" required class="input" name="date">
    </div>
    
    
    <div class="subject">
      <input type="text" placeholder="Report Title" class="input" name="title" required>
    </div>
    
    <div class="msg">
      <textarea  class="area" placeholder="Report Main Information" name="main" required></textarea>
    </div>
    
    <input class="btn" name="submit" type="submit" value="Create Report"/>
  </div>
</form>



<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
