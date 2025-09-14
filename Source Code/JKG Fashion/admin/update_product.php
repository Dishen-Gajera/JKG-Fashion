<?php 

include("../config.php");
if(isset($_POST['add'])){
    
$id=$_POST['id'];
$pname=$_POST['productname'];
$price=$_POST['price'];
$qut=$_POST['qut'];
$gender=$_POST['gender'];
$category=$_POST['category'];
$size=$_POST['size'];


$add="UPDATE `add_product` SET product_name='$pname',price='$price',qut='$qut',gender='$gender',category='$category',size='$size' WHERE product_id='$id'";
if(mysqli_query($con,$add)){
    echo "<script>
    alert('product Update');
    window.location.href='product_manage.php';
    </script>";
}

}
   
?>
