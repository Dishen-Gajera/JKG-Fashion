<?php
session_start();
  if(isset($_SESSION['name'])==0){
    header("location:admin_login.php");
  }
  
  ?>

<?php
include_once("../config.php");
if(isset($_POST['undo'])){
    
    $id=$_POST['order_id'];

    $result=mysqli_query($con,"SELECT * FROM confirm_orders WHERE order_id='$id'");


    while($data=mysqli_fetch_array($result)){
        $sql="INSERT INTO `orders`(`sr_number`, `prod_id`, `prod_name`, `prod_price`, `gender`, `size`, `prod_qut`, `total`, `pay_mode`, `date`) VALUES ('$data[sr_number]','$data[order_id]','$data[conf_name]','$data[conf_price]','$data[gender]','$data[size]','$data[qut]','$data[total]','$data[pay_mode]','$data[order_time]')";
        
        if(mysqli_query($con,$sql)){
            $qut1=$data['qut'];
            $srnumber=$data['sr_number'];
            $sql2=mysqli_query($con,"SELECT * FROM `add_product` WHERE product_id='$srnumber'");
            $result2=mysqli_fetch_array($sql2);
            $qut=$result2['qut'];
            $qut+=$qut1;

            mysqli_query($con,"UPDATE `add_product` SET `qut`=$qut WHERE product_id='$srnumber'");
            mysqli_query($con,"UPDATE `buyers` SET`status`=0 WHERE buyer_id='$id'");
            
            
            
        }
    }

     mysqli_query($con,"DELETE FROM `confirm_orders` WHERE order_id='$id'");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                                                <th>NO</th>
                                                <th>Order_id</th>
                                                <th>Buyer Nme</th>
                                                <th>Number</th>
                                                <th>Address</th>
                                                <th class="text-center" >Order</th>
                                                <th class="text-center" >Action</th>

                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include("../config.php");
                                                $query="select * from buyers WHERE status=1";
                                                $result = mysqli_query($con,$query);
                                                $count=0;
                                                while ($data = mysqli_fetch_array($result)) {
                                                    $count++;
                                                    $id=$data['buyer_id'];
                                            ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $data['buyer_id']; ?></td>
                                                <td><?php echo $data['buyer_name']; ?></td>
                                                <td><?php echo $data['mobileno']; ?></td>
                                                <td><?php echo $data['b_address']; ?></td>
                                                <td>
                                                    <table style="border: 2px dotted;">
                                                    <tr style="border: 2px dotted;">
                                                        <th>Pro No</th>
                                                        <th>Product Name</th>
                                                        <th>Gender</th>
                                                        <th>Price</th>
                                                        <th>Size</th>
                                                        <th>Qut</th>
                                                        <th>Total</th>
                                                        <th>Pay Mode</th>
                                                        <th>Order Time</th>
                                                        <th>Confirm Time</th>

                                                    </tr>
                                                    <?php
                                                    $query2 = " select * from confirm_orders WHERE order_id='$id'";
                                                    $result2 = mysqli_query($con, $query2);
                                                    $count2=0;
                                                    $grandtotal=0;
                                                    while ($data2 = mysqli_fetch_array($result2)) {
                                                        $count2++;
                                                        $grandtotal+= $data2['total'];
                                                     

                                                
                                                    ?>
                                                    <tr style="border: 2px dotted;">
                                                        <td><?php echo $count2; ?></td>
                                                        <td><?php echo $data2['conf_name']; ?></td>
                                                        <td><?php echo $data2['conf_price']; ?></td>
                                                        <td><?php echo $data2['gender']; ?></td>
                                                        <td><?php echo $data2['size']; ?></td>
                                                        <td><?php echo $data2['qut']; ?></td>
                                                        <td><?php echo $data2['total']; ?></td>
                                                        <td><?php echo $data2['pay_mode']; ?></td>
                                                        <td><?php echo $data2['order_time']; ?></td>
                                                        <td><?php echo $data2['conf_time']; ?></td>


                                                    </tr>
                                                    
                                                        <?php
                                                        }
                                                        ?>
                                                        <tr style="border: 2px solid;">
                                                        <td colspan="6" class="text-center" ><b>Grand Total</b></td>
                                                        <td colspan="3" class="text-center"><b><?php echo $grandtotal ?></b></td>
                                                    </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <form action="" method="post">
                                                        <input type="hidden" name="order_id" value="<?php echo $data['buyer_id']; ?>" >
                                                        <button class="btn btn-outline-success" name="undo" type="submit" ><i class="fa-solid fa-rotate-left"></i> Undo</button>
                                                    </form>
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