<?php
include("header.php");
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="istyle.css">
</head>

<body>

  <div class="container">


    <div class="row ms-4" id="top">
      <?php
              $query = "SELECT * FROM `add_product` WHERE gender='female' AND category='dress'";

              $result = mysqli_query($con, $query);
      
              while ($data = mysqli_fetch_array($result)) {
          ?>
      <div class="col-md-4 mt-3">
        <form action="cart.php" method="post">
          <div class="dress-card">
            <div class="dress-card-head">
 
              <img class="dress-card-img-top" src="./img/<?php echo $data['image'];?>" alt="">
        
            </div>
            <div class="dress-card-body">
              <h4 class="dress-card-title">
                <?php echo $data['product_name'];?>
              </h4>
              <p class="dress-card-para">
                <?php echo "For  ".$data['gender'];?>
              </p>
              <p class="dress-card-para dress-card-price">
    <?php echo "₹".$data['price'];?>
                <?php 
              if($data['qut']<=0){
                ?>
              
                <?php echo "Out Of Stock"; ?>
              </p>
              <?php
              }
              ?>
              
              <p class="dress-card-para">
                <?php echo "Size : ".$data['size'];?>
              </p>
             
              <div class="row text-center">
                <input type="hidden" name="product_id" value="<?php echo $data['product_id'];?>">
                <input type="hidden" name="product_name" value="<?php echo $data['product_name'];?>">
                <input type="hidden" name="gender" value="<?php echo $data['gender'];?>">
                <input type="hidden" name="size" value="<?php echo $data['size'];?>">
                <input type="hidden" name="price" value="<?php echo $data['price'];?>">
                

                <div class="col-md-6 card-button"><button id="button" type="submit" name="add"
                    class="card-button-inner bag-button">Add to Bag</button></div>

              </div>
            </div>
          </div>
        </form>
      </div>
      <?php
              }
              ?>



    </div>
    
  </div>
  <?php
              include_once("footer.php");

              ?>
</body>

</html>