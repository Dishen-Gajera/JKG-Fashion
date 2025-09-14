<?php
include("header.php");
include_once("config.php");

$number=$_SESSION['number'];
if(isset($_POST['cancel'])){
    $id1=$_POST['id'];
   mysqli_query($con,"DELETE FROM `buyers` WHERE buyer_id='$id1'");
   mysqli_query($con,"DELETE FROM `orders` WHERE prod_id='$id1'");   
   echo "<script>
   alert('Your order is cancel');
 
   </script>";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .container{
        margin-top: 2cm;
     
      }
      .bod td{
        background: rgb(211, 222, 225);
        
      }
      .bod2 tr td{
        border : 1px solid black;
       
      }
    </style>
</head>

<body>

<div class="container">
<table class="table" style="border : 2px solid black;" >
        <thead>
            <tr>
                <th scope="col">Order Id</th>
                <th scope="col">Number</th>
                <th scope="col">Address</th>
                <th scope="col">Order</th>
                <th scope="col">Status</th>

            </tr>
        </thead>
        <tbody>
            <?php
  $result=mysqli_query($con,"SELECT * FROM buyers WHERE mobileno='$number' ORDER BY buyer_id desc ");

  while($res=mysqli_fetch_array($result)){
  
    $id=$res['buyer_id'];
    $status=$res['status'];
  ?>
            <tr>
                <th scope="row"><?php echo $id; ?></th>
                <td><?php echo $res['mobileno']; ?></td>
                <td><?php echo $res['b_address']; ?></td>
                <td>
                    <table class="table bod2">
                        <tr>
                            <th scope="col">Product_name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">price</th>
                            <th scope="col">Size</th>
                            <th scope="col">Qut</th>
                            <th scope="col">Total</th>



                        </tr>
                        <tbody>
                            <?php
        if($status==1){
            $result2=mysqli_query($con,"SELECT * FROM confirm_orders WHERE order_id='$id'");
            $total=0;
            while($res2=mysqli_fetch_array($result2)){
                $total+=$res2['total'];

                $date1=$res2['order_time'];
                $date2=$res2['conf_time'];
                $paymode=$res2['pay_mode'];
                ?>
                            <tr>
                                <td><?php echo $res2['conf_name']; ?></td>
                                <td><?php echo $res2['gender']; ?></td>
                                <td><?php echo $res2['conf_price']; ?></td>
                                <td><?php echo $res2['size']; ?></td>
                                <td><?php echo $res2['qut']; ?></td>
                                <td><?php echo $res2['total']; ?></td>

                               

                            </tr>

                            

                            <?php
            }
            ?>
            <tr class="bod">
              <td colspan="2"><?php echo "Date       " . $date1 ." to " .$date2; ?></td>
              <td colspan="2"><?php echo $paymode; ?></td>
              <td colspan="2"><?php echo $total; ?></td>
            </tr>
            <?php
        }
        ?>
                            <?php
         if($status==0){
            $result2=mysqli_query($con,"SELECT * FROM orders WHERE prod_id='$id'");
            $total=0;
            while($res2=mysqli_fetch_array($result2)){
                $total+=$res2['total'];
                $date1=$res2['date']; 
                $paymode=$res2['pay_mode'];

                ?>
                            <tr>
                                <td><?php echo $res2['prod_name']; ?></td>
                                <td><?php echo $res2['gender']; ?></td>
                                <td><?php echo $res2['prod_price']; ?></td>
                                <td><?php echo $res2['size']; ?></td>
                                <td><?php echo $res2['prod_qut']; ?></td>
                                <td><?php echo $res2['total']; ?></td>

                                


                            </tr>

                            <?php
            }
            ?>
            <tr class="bod">
              <td colspan="2"><?php echo "Date     " . $date1; ?></td>
              <td colspan="2"><?php echo $paymode; ?></td>
              <td colspan="2"><?php echo $total; ?></td>
            </tr>
            <?php
        }
        ?>
                            <?php
         if($status==2){
            $result2=mysqli_query($con,"SELECT * FROM cancel_orders WHERE order_id='$id'");
            $total=0;
            while($res2=mysqli_fetch_array($result2)){
                $total+=$res2['total'];
                $date1=$res2['order_time'];
                $paymode=$res2['pay_mode'];

                ?>
                            <tr>
                                <td><?php echo $res2['canc_name']; ?></td>
                                <td><?php echo $res2['gender']; ?></td>
                                <td><?php echo $res2['canc_price']; ?></td>
                                <td><?php echo $res2['size']; ?></td>
                                <td><?php echo $res2['qut']; ?></td>
                                <td><?php echo $res2['total']; ?></td>

                       



                            </tr>

                            <?php
            }
            ?>
             <tr class="bod">
              <td colspan="2"><?php echo "Date      " . $date1; ?></td>
              <td colspan="2"><?php echo $paymode; ?></td>
              <td colspan="2"><?php echo $total; ?></td>
            </tr>
            <?php

        }
        ?>
                        </tbody>
                    </table>
                </td>
                <td><?php if($status==1){
        ?>
                    <button class="btn btn-outline-success mt-3 ms-3 p-1">Complate</button>
                    <?php
      }
        elseif($status==0){
            ?>
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-outline-danger mt-1 ms-3 p-1" name="cancel">cancel order</button>
        </form>
                    <?php
        }else{
            ?>
                    <button class="btn btn-outline-primary mt-3 ms-3 p-1">Denide</button>
                    <?php
        }
        ?>
                </td>
            </tr>
            <?php
  }
  ?>
        </tbody>
    </table>
</div>
    
</body>
<?php
include_once("footer.php");
?>

</html>