<?php
include("../config.php");
$id=$_GET['id'];
$sql="DELETE FROM `add_product` WHERE product_id='$id'";
$res=mysqli_query($con,$sql);
header("location:product_manage.php");
?>