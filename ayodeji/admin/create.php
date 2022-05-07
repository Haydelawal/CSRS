<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
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
                    <a href="create.php"><span class="la la-pencil"></span>
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
                    <a href="http://localhost/ayodeji/index.html"><span class="la la-mail-reply"></span>
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

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search" />
            </div>
            <br>
        </header>

        <main>
            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Number Of Users</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

              


                <div class="card-single">
                    <div>
                        <h1>2</h1>
                        <span>Number Of Reports</span>
                    </div>
                    <div>
                        <span class="lab la-wpforms"></span>
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
                                            <td>Writer</td>
                                            <td>Date</td>
                                            <td>Title</td>
                                            <td>Main</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            

                                        </tr>
                                       
                                       


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