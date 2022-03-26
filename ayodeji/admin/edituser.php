<?php

include 'connect.php';

?>


<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","ayodeji") or die(mysqli_error());
$query4 = "SELECT COUNT(id) AS count FROM `creds` ";

$query_result4 = mysqli_query($conn, $query4);

while($row4 = mysqli_fetch_assoc($query_result4)){
  $output4 = $row4['count'];

}


$sql4 = "SELECT * FROM `creds`";
$result4 = mysqli_query($conn, $sql4);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="logout.js"></script>
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="la la-indent"></span> <span>Dash Board</span></h2>
        </div>
        <!--Section-->
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php" class="active"><span class="las la-home"></span>
                    <span>Home</span></a>
                </li>
                <li>
                    <a href="users.php"><span class="las la-user-circle"></span>
                    <span>Users</span></a>
                </li>
                <li>
                    <a href="edituser.php"><span class="las la-user"></span>
                    <span>Edit User</span></a>
                </li>
                <li>
                    <a href="report.php"><span class="la la-book"></span>
                    <span>Reports</span></a>
                </li>
                <li>
                    <a href="search.php"><span class="la la-search"></span>
                    <span>Search</span></a>
                </li>
                <li>
                    <a href="http://localhost/ayodeji/create%20report/dist/index.php"><span class="la la-pencil"></span>
                    <span>Create Report</span></a>
                </li>
               
                <li>
                    <a href="editreport.php"><span class="la la-pencil-square-o"></span>
                    <span>Edit Reports</span></a>
                </li>
                <li>
                    <a href="deletereport.php"><span class="la la-times-circle"></span>
                    <span>Delete Report</span></a>
                </li>
                <br>
                <li>
                    <a onclick="logout()"><span class="la la-mail-reply"></span>
                    <span>Log Out</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                </label> ADMIN
            </h2>

            
            <br>
        </header>

        <main>
            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1><?php echo $output4; ?></h1>
                        <span>Number Of Users</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
            </div>
            <!--Table-->
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Over View</h3>

                           
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Email</td>
                                            <td>Password</td>
                                            <td>User</td>
                                            <td>Update</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
        <?php
         $sql = "select * from `creds`";
         $result = mysqli_query($con, $sql);
         if($result){


          while($row = mysqli_fetch_assoc($result)){
              $id =$row['id'];

            $email =$row['email'];

            $password =$row['password'];
            $user =$row['user'];

                                  echo'     <tr>
                                            <td>'.$email.'</td>
                                            <td>'.$password.'</td>
                                            <td>'.$user.'</td>
                                            <td><button><a href="http://localhost/ayodeji/edit/updateuser.php?updateid='.$id.'">Update</a></button></td>

                                        </tr>';
          }
        }
        ?>
                                       
                                       


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                
            </div>
        </main>

    </div>

</body>

</html>