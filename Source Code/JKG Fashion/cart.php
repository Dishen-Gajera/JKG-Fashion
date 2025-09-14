<?php
include_once("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['add'])){
            $id=$_POST['product_id'];
           $result=mysqli_query($con,"SELECT * FROM add_product WHERE product_id='$id'");

           $data=mysqli_fetch_array($result);
            if($data['qut']>0){
                if(isset($_SESSION["cart"])){

                    $product_id=array_column($_SESSION["cart"],'p_id');
                    if(in_array($_POST['product_id'],$product_id)) {
                        echo "<script>alert('already');
                        window.location.href='index.php';
                        </script>";
                    
                    }else{
                    $count=count($_SESSION["cart"]);
                    $_SESSION["cart"][$count]=array('p_id'=>$_POST['product_id'],'p_name'=>$_POST['product_name'],'gender'=>$_POST['gender'],'size'=>$_POST['size'],'price'=>$_POST['price'],'qut'=>1);
                    echo "<script>alert('item added');
                    window.location.href='index.php';
                    </script>";
                    
                    }
    
                 } else{
                        $_SESSION["cart"][0]=array('p_id'=>$_POST['product_id'],'p_name'=>$_POST['product_name'],'gender'=>$_POST['gender'],'size'=>$_POST['size'],'price'=>$_POST['price'],'qut'=>1);
                        echo "<script>alert('item added');
                        window.location.href='index.php';
                        </script>";
                
                    
                    }
                }else{
                    echo "<script>alert('Item is not in stock');
                        window.location.href='index.php';
                        </script>";
                }
                
            }
            
        }
        
        

        if(isset($_POST['quti'])){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['p_id']==$_POST['id']){
                    
                    $_SESSION['cart'][$key]['qut']=$_POST['quti'];
                    echo "<script>
                        window.location.href='mycart.php';
                        </script>";
                }
            }
        }

        if(isset($_POST['delete'])){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['p_id']==$_POST['id']){
                    
                  unset($_SESSION['cart'][$key]);
                  $_SESSION['cart']=array_values($_SESSION['cart']);
                    echo "<script>
                        window.location.href='mycart.php';
                        </script>";
                }
            }
        }
?>