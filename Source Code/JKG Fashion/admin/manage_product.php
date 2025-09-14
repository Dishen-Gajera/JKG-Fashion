<?php
include("../config.php");
if(isset($_POST['add'])){
$pname=$_POST['productname'];
$price=$_POST['price'];
$qut=$_POST['qut'];
$gender=$_POST['gender'];
$category=$_POST['category'];
$size=$_POST['size'];
$image=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
$folder="../img/".$image;
move_uploaded_file($tempname,$folder);

$add="INSERT INTO `add_product`(`product_name`,`price`,`qut`,`gender`,`category`,`size`,`image`) VALUES ('$pname','$price','$qut','$gender','$category','$size','$folder')";

if(mysqli_query($con,$add)){
    echo "<script>
    alert('product added');
    window.location.href='add_product.php';
    </script>";
}


}  

?>