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

            $violation =$row['violation'];



if(isset($_POST['submit'])){

  $writer =$_POST['writer'];



  $date =$_POST['date'];

  $title =$_POST['title'];
  $main =$_POST['main'];
  $violation =$_POST['violation'];


$sql = "update `report` set id=$id, 
writer = '$writer',
date ='$date',

title ='$title',
main ='$main',
violation = '$violation'
 
where id=$id
 ";

 $result = mysqli_query($con,$sql);


// $result = mysqli_query($con,$sql);

if($result) {

  // header("Location: http://localhost/bolaji/dist/work.php");

  // header('location:http://localhost/qudus/admin/updatepetition.php');
  echo "<script>alert('Data Updated Succesfully');</script>";
     

}else{
  die(mysqli_error($con));
}

}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Update Report</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css'>

<style>
    body {
      background-image: url('https://pixabay.com/photos/wall-bricks-paint-rocks-pattern-2588973');
    }
    </style>

</head>
<body>
<!-- partial:index.partial.html -->
<h1 class="title has-text-centered">
</div>

  <div class="container my-5 mt-5 mx-5 px-5">
    <h2 class="subtitle is-2 is-capitalized">Update Report</h2>
    <br>
    <form method="post">
        <div class="field">
            <label for="name" class="label is-size-4 has-text-weight-light"></label>
            <div class="control has-icons-left">
                <input type="hidden" name="writer" id="name" class="input"  autofocus value="ADMIN">
                    <!-- <span class="icon is-left">
                        <i class="fa fa-user"></i>
                    </span> -->
            </div>
        </div>

        <div class="field">
            <label for="email" class="label is-size-4 has-text-weight-light">Report Title</label>
            <div class="control has-icons-left">
                <input type="text" name="title" id="email" class="input" placeholder="Title" value=" <?php echo $title;?>">
                    <span class="icon is-left">
                        <i class="fa fa-sticky-note"></i>
                    </span>
            </div>
        </div>

        <br>

        <div class="field">
            <label for="email" class="label is-size-4 has-text-weight-light">Date</label>
            <div class="control has-icons-left">
                <input type="date" name="date" id="email" class="input" value=<?php echo $date;?>>
                    <span class="icon is-left">
                        <i class="fa fa-clock"></i>
                    </span>
            </div>
        </div>

        <br>

        <div class="field">
            <label for="email" class="label is-size-4 has-text-weight-light">Rule/Conduct Violated</label>
            <div class="control has-icons-left">
                <!-- <input type="email" name="email" id="email" class="input" placeholder="Email"> -->
                    <span class="icon is-right">
                        <i class="fa fa-arrow-down"></i>
                    </span>

                    <select id="email" class="input" name="violation">
                    <option value=" <?php echo $violation;?>">----<?php echo $violation;?>-----</option>

                        <option >----Offense Type-----</option>
                        

                        <option value="Indecent Dressing">Indecent Dressing</option>
                        <option value="Indecent Dressing">Indecent Dressing</option>
                        <option value="Possession Of Weapons">Possession Of Weapons</option>
                        <option value="Possession Of Hard Substances  (Drugs/Alcohol)">Possession Of Hard Substances (Drugs/Alcohol)</option>
                        <option value="Involvement in Gang activity/ Cult">Involvement in Gang activity/ Cult</option>

                        <option value="Vandalism">Vandalism</option>
                        <option value="Sexual Harrassment">Sexual Harrassment</option>
                        <option value="Violence, Assault and Aggression">Violence, Assault and Aggression</option>
                        <option value="Involvement in Gang activity/ Cult">Involvement in Gang activity/ Cult</option>
                      </select>  
            </div>
        </div>

        <br>

        <div class="field">
            <label for="message" class="label is-size-4 has-text-weight-light">Report Body</label>
            <textarea name="main" id="message" rows="5" class="textarea is-medium" placeholder="Report Body Goes Here" value="<?php echo $main;?>"><?php echo $main;?></textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="button is-success is-size-5">Update</button>
    </form>
</div>
<!-- partial -->
  
</body>
</html>
