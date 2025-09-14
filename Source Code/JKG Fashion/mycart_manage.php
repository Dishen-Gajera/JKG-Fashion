<?php
session_start();
include_once("config.php");
$paymode=$_POST['p_mode'];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['buy'])){
        $qry="INSERT INTO `buyers`(`buyer_name`, `mobileno`, `b_address`, `status`) VALUES ('$_POST[username]','$_POST[number]','$_POST[address]',0)";
        if(mysqli_query($con,$qry)){
            $prod_id=mysqli_insert_id($con);
            $qry2="INSERT INTO `orders`(`sr_number`, `prod_id`, `prod_name`, `prod_price`, `gender`, `size`, `prod_qut`, `total`, `pay_mode`) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt=mysqli_prepare($con,$qry2);
            if($stmt){
                
                foreach($_SESSION["cart"] as $key => $value){
                    $sr_number=$value['p_id'];
                    $p_name=$value['p_name'];
                    $p_price=$value['price'];
                    $p_gender=$value['gender'];
                    $p_size=$value['size'];
                    $p_qut=$value['qut'];
                    $total=$p_price * $p_qut;
                    
                    mysqli_stmt_bind_param($stmt,"iisissiis",$sr_number,$prod_id,$p_name,$p_price,$p_gender,$p_size,$p_qut,$total,$paymode);
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION["cart"]);
                echo "<script>
                alert('Order Placed');
                window.location.href='index.php';
                </script>";
            }else{
               echo "no";

            }
        }else{
                echo"non";
        }
    }
}
?>