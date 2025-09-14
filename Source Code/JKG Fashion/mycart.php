<?php 
include_once("config.php");
include("header.php"); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row bg-light mt-4">
            <div class="col">
                <h4 style="margin-top: 30px; margin-left: 17cm; margin-bottom: 30px;">My Cart</h4>
            </div>
        </div>
        <div class="row" style="margin-left: 4cm;">

            <div class="col-lg-8">
                <table class="mt-4" style=" width: 100%;">
                    <thead>
                        <tr class="bg-light" style="border: 1px solid green;">
                            <th>SR</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody style="margin-top: 20px;">
                        <?php 
                            if(isset($_SESSION["cart"])){
                              $count=0;
                                
                                foreach ($_SESSION["cart"] as $key => $value) {
                                    $result=mysqli_query($con,"SELECT * FROM add_product WHERE product_id='$value[p_id]'");
                                    $data=mysqli_fetch_array($result);
                                    $qutmax=$data['qut'];
                                  $count++;
                        ?>
                        <tr>
                            <th scope="row">
                                <?php echo $count; ?>
                            </th>
                            <td>
                                <?php echo $value['p_name']; ?>
                            </td>
                            <td>
                                <?php echo $value['price']; ?> <input type="hidden" class="iprice"
                                    value="<?php echo $value['price']; ?>">
                            </td>
                            <form action="cart.php" method="post">
                                <td>
                                    <input type="number" class="iquantity" name="quti" onchange="this.form.submit();"
                                        value="<?php if($value['qut']>  $qutmax){echo $qutmax;}elseif($value['qut']<=0){echo "1";}else{ echo $value['qut']; }?>" style="width : 90px; " min=1 max=<?php echo $qutmax; ?>>
                                    <input type="hidden" name="id" value="<?php echo $value['p_id']; ?>">
                                </td>

                            </form>
                            <td class="itotal"></td>
                            <form action="cart.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $value['p_id']; ?>">
                                <td><button class="btn btn-outline-danger" name="delete" type="submit">Delete</button>
                                </td>
                            </form>


                        </tr>
                        <?php
                            }
                          }
                            ?>

                    </tbody>

                </table>
            </div>

            
                <div class="col-lg-4 bg-light rounded mt-4 text-center" style="width : 300px;">
                    <h4>Grand Total</h4>
                    <h4 id="grandtotal" class="mt-3 mb-3" style="margin-left : -2cm;"></h4>
                    <?php if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
                    
                    ?>
                    <form action="mycart_manage.php" method="post">
                    <div>
                        <input type="radio" name="p_mode" id="pmode" value="cod" required>
                        <label for="Cod">Cash on Dilivery</label>
                        <br>
                        
                    </div>
                    <div class="mt-2">
                        <input type="hidden" name="username" value="<?php if(isset($_SESSION['name'])==1){ echo $_SESSION['name']; } ?>">
                        <input type="hidden" name="number" value="<?php if(isset($_SESSION['number'])==1){ echo $_SESSION['number']; } ?>">
                        <label class="text-danger" style="margin-left : 0.60cm;">*Pease Enter Your Proper address With Pincode Number</label><br>
                        <label for="add" style="margin-left : -2.93cm;"><b>Address</b></label><br>
                        <textarea name="address" cols="20" rows="3" id="add" required></textarea>
                    </div>
                        <?php
                        if(isset($_SESSION['number'])==0){
                        ?>
                    <a href="login.php" class="btn btn-outline-warning text-dark mt-3" style="background : yellow; width : 200px;">Buy</a>
                        <?php
                            }else{
                        ?>
                    <button type="submit" name="buy" class="btn btn-outline-warning text-dark mt-3" style="background : yellow; width : 200px;">Buy</button>
                            <?php
                                }
                            ?>
                        </form>
                    <?php
                    }
                    ?>
                </div>

               
        </div>
        
    </div>

    <script>
        
    let gt = 0;
    let iprice = document.getElementsByClassName("iprice");
    let iquantity = document.getElementsByClassName("iquantity");
    let itotal = document.getElementsByClassName("itotal");
    let grandtotal = document.getElementById('grandtotal');

    function subTotal() {
        gt = 0
        for (let i = 0; i < iprice.length; i++) {
            itotal[i].innerText = (iquantity[i].value) * (iprice[i].value);
            gt = gt + (iquantity[i].value) * (iprice[i].value);
        }
        grandtotal.innerText = gt;
    }
    subTotal();
    </script>
</body>

</html>