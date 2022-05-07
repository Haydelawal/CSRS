<?php

include 'connect.php';

$id = $_GET['updateid'];
$sql = "select * from `creds` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$id =$row['id'];

           $email =$row['email'];


            $password =$row['password'];

            $user =$row['user'];



if(isset($_POST['submit'])){

  $email =$_POST['email'];


  $password =$_POST['password'];

  $user =$_POST['user'];


$sql = "update `creds` set id=$id, 
email = '$email',
password ='$password',

user ='$user'
 
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
  <title>Update User</title>
  <link rel="stylesheet" href="./style2.css">

</head>
<body>
<!-- partial:index.partial.html -->

<form method="post">
<div class="container">
    <p>Update User</p>
    
    
    
    <div class="subject">
      <input type="text" placeholder="Email" class="input" name="email" required   value="<?php echo $email;?>">
      
      <input type="text" placeholder="Password" required class="input" name="password"  value=" <?php echo $password;?>" >
      <input type="text" placeholder="User" required class="input" name="user"   value=" <?php echo $user;?>">
    
    
    </div>
    
    <!-- <div class="msg">
      <input  class="area" placeholder="Report Main Information" name="main" required value="//">
    </div> -->
    
    <input class="btn" name="submit" type="submit" value="Update User"/>
  </div>
</form>



<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
