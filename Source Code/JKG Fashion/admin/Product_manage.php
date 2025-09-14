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
                                    <h4 class="card-title">Product Data</h4>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Product Name</th>
                                                <th>Gender</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Qut</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include("../config.php");
                                                $query = " select * from add_product";
                                                $result = mysqli_query($con, $query);
                                                $count=0;
                                                while ($data = mysqli_fetch_array($result)) {
                                                    $count++;
                                            ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $data['product_name']; ?></td>
                                                <td><?php echo $data['gender']; ?></td>
                                                <td><?php echo $data['category']; ?></td>
                                                <td><?php echo $data['price']; ?></td>
                                                <td><?php echo $data['qut']; ?></td>
                                                <td>
                                                    <div class="text-center">
                                                <button class="btn btn-danger text-light mr-4"> <a class="text-light" href="delete.php?id=<?php echo $data['product_id']; ?>"><i class="fa-solid fa-trash"></i></a></button>
                                                <button class="btn btn-success text-light"> <a class="text-light" href="update.php?id=<?php echo $data['product_id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></button>
                                                </div>

                                                    
                                                   
                                                </td>
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