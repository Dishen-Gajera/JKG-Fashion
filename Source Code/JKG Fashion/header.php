<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="hstyle.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <img src="image/logo.png" height="100px" width="160px" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2  mb-lg-0" id="co">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Men
            </a>
            <ul class="dropdown-menu mt-3" id="co" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="men_all.php">All</a></li>
              <li><a class="dropdown-item" href="m_shirt.php">Shirt</a></li>
              <li><a class="dropdown-item" href="m_t-shirt.php">T-Shirt</a></li>
              <li><a class="dropdown-item" href="m_pant.php">Pant</a></li>
              <li><a class="dropdown-item" href="m_jacket.php">Jacket</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Women
            </a>
            <ul class="dropdown-menu mt-3 mr-4" id="co" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="women_all.php">All</a></li>
              <li><a class="dropdown-item" href="w_shirt.php">Shirt</a></li>
              <li><a class="dropdown-item" href="w_t-shirt.php">T-Shirt</a></li>
              <li><a class="dropdown-item" href="w_jacket.php">Jacket</a></li>
              <li><a class="dropdown-item" href="w_dress.php">Dress</a></li>
              <li><a class="dropdown-item" href="w_legghines.php">Legghines</a></li>
              <li><a class="dropdown-item" href="w_crop-top.php">Crop-Top</a></li>

            </ul>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="aboutus.php" tabindex="-1" aria-disabled="true">About As</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contectus.php" tabindex="-1" aria-disabled="true">Contect</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="feedback.php" tabindex="-1" aria-disabled="true">Feed Back</a>
          </li>
        </ul>

        <?php 
        session_start();
        $count=0;
            if(isset($_SESSION["cart"])){
              $count=count($_SESSION["cart"]);
            }

        if(isset($_SESSION['number'])==0){
         
        ?>
        <a href="login.php"><button class="btn btn-outline-light" type="submit">Login</button></a>
        <?php
        }else{
          ?>
        <a href="logout.php"><button class="btn btn-outline-light" type="submit">Logout</button></a>
        <?php
        }
        ?>
        <a href="mycart.php"><button class="btn btn-outline-light ms-2" 
            style="padding-left: 0.60cm; padding-right: 0.60cm;"><i class="fa-solid fa-cart-plus"> <?php echo $count; ?></i></button></a>
<?php
            if(isset($_SESSION['number'])==1){
              ?>
            <a href="order_status.php"><button class="btn btn-outline-light ms-2"
            style="padding-left: 0.60cm; padding-right: 0.60cm;"> View Orders</button></a>

            <?php
            }
            ?>

    </div>
  </div>
</nav>
</body>
</html>