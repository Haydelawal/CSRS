<?php

include 'connect.php';

$id = $_GET['updateid'];
$sql = "select * from `report` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$id =$row['id'];

$writer =$row['writer'];


            $date =$row['date'];

            $title =$row['title'];
            $main =$row['main'];




if(isset($_POST['submit'])){

  $writer =$_POST['writer'];



  $date =$_POST['date'];

  $title =$_POST['title'];
  $main =$_POST['main'];


$sql = "update `report` set id=$id, 
writer = '$writer',
date ='$date',

title ='$title',
main ='$main'
 
where id=$id
 ";

 $result = mysqli_query($con,$sql);


// $result = mysqli_query($con,$sql);

if($result) {

  // header("Location: http://localhost/bolaji/dist/work.php");

  // header('location:http://localhost/qudus/admin/updatepetition.php');
  echo '<script>confirm("Data Updated Successfully")</script>';
     

}else{
  die(mysqli_error($con));
}

}

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Edit Report</title>
  <link rel="stylesheet" href="./style2.css">

</head>
<body>
<!-- partial:index.partial.html -->

<form method="post">
<div class="container">
    <p>Edit Report</p>
    
    <div class="login">
      <input type="text" placeholder="Name Of Writer" required class="input" name="writer"  value=" <?php echo $writer;?>" >
      <input type="date" placeholder="Date Of Creation" required class="input" name="date"   value=<?php echo $date;?>>
    </div>
    
    
    <div class="subject">
      <input type="text" placeholder="Report Title" class="input" name="title" required   value="<?php echo $title;?>">
    </div>
    
    <div class="msg">
      <input  class="area" placeholder="Report Main Information" name="main" required value="<?php echo $main;?>">
    </div>
    
    <input class="btn" name="submit" type="submit" value="Update Report"/>
  </div>
</form>



<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
