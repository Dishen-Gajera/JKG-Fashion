<?php
session_start();
  if(isset($_SESSION['name'])==0){
    header("location:admin_login.php");
  }
  
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Font: Source Sans Pro -->
    <?php
  include_once("include/style.php");
  ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

        <!-- Navbar -->
        <?php
  include_once("include/header.php");
  ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            

            <!-- Sidebar -->
            <?php
    include_once("include/sidebar.php");
    ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">User Data</h4>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover" align="center">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Number</th>
                                                <th>Password</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include("../config.php");
                                                $query = " select * from user";
                                                $result = mysqli_query($con, $query);
                                                $count=0;
                                                while ($data = mysqli_fetch_array($result)) {
                                                    $count++;
                                            ?>
                                            <tr>
                                               
                                                <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['user_name']; ?></td>
                                                <td><?php echo $data['number']; ?></td>
                                                <td><?php echo $data['password']; ?></td>
                                                
                                            </tr>
                                            <?php
                                                }
                                            ?>

                                        </tbody>
                                     
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                           
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content-header -->

            <!-- Main content -->

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
  include_once("include/footer.php");
  ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php
  include_once("include/script.php");
  ?>

    <!-- jQuery -->
</body>

</html>