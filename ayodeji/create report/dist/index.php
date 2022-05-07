<?php

include 'connect.php';

           

if(isset($_POST['submit'])){


  
  $writer = $_POST['writer'];
  $date = $_POST['date'];

  $title = $_POST['title'];

  $main = $_POST['main'];
  $violation = $_POST['violation'];
  


  $sql = "insert into `report` (writer,date,title,main,violation)

values   ('$writer','$date','$title','$main','$violation') ";
$result = mysqli_query($con,$sql);

if($result) {

  echo "<script>alert('Data Insertion Succesful');</script>";
  header('Location: http://localhost/ayodeji/admin/index.php');

}else{
  die(mysqli_error($con));
}

}

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Create Report</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css'>

<style>
    body {
      background-image: url('https://cdn.pixabay.com/photo/2017/05/08/19/35/cyber-security-2296269_960_720.jpg');
    }
    </style>

</head>
<body>
<!-- partial:index.partial.html -->
<h1 class="title has-text-centered">
</div>

  <div class="container my-5 mt-0 mx-5 px-5">
    <h2 class="subtitle is-2 is-capitalized">CREATE REPORT</h2>
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
            <label for="email" class="label is-size-4 has-text-weight-medium">Report Title</label>
            <div class="control has-icons-left">
                <input type="text" name="title" id="email" class="input" placeholder="Title">
                    <span class="icon is-left">
                        <i class="fa fa-sticky-note"></i>
                    </span>
            </div>
        </div>

        <br>

        <div class="field">
            <label for="email" class="label is-size-4 has-text-weight-medium">Date</label>
            <div class="control has-icons-left">
                <input type="date" name="date" id="email" class="input" >
                    <span class="icon is-left">
                        <i class="fa fa-clock"></i>
                    </span>
            </div>
        </div>

        <br>

        <div class="field">
            <label for="email" class="label is-size-4 has-text-weight-medium">Rule/Conduct Violated</label>
            <div class="control has-icons-left">
                <!-- <input type="email" name="email" id="email" class="input" placeholder="Email"> -->
                    <span class="icon is-right">
                        <i class="fa fa-arrow-down"></i>
                    </span>

                    <select id="email" class="input" name="violation">
                        <option >----Offense Type-----</option>


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
            <label for="message" class="label is-size-4 has-text-weight-medium">Report Body</label>
            <textarea name="main" id="message" rows="5" class="textarea is-small" placeholder="Report Body Goes Here"></textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="button is-info is-size-5">Submit</button>
    </form>
</div>
<!-- partial -->
  
</body>
</html>
