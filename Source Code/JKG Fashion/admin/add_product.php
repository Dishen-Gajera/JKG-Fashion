<?php
session_start();
  if(isset($_SESSION['name'])==0){
    header("location:admin_login.php");
  }
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <style>

/* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
margin-top: 2cm;
margin-left: 0cm;
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}
body{
min-height: 100vh;
display: flex;
align-items: center;
justify-content: center;
background-color: #fff;
}
.container{
margin-top: 30px;
position: relative;
margin-left: 200px;
max-width: 900px;
width: 100%;
border-radius: 6px;
padding: 30px;
margin: 0 15px;
background-color: #fff;
box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
position: relative;
font-size: 20px;
font-weight: 600;
color: #333;
}
.container header::before{
content: "";
position: absolute;
left: 0;
bottom: -2px;
height: 3px;
width: 27px;
border-radius: 8px;
background-color: #4070f4;
}
.container form{
position: relative;
margin-top: 16px;
min-height: 490px;
min-width: 400px;
background-color: #fff;
overflow: hidden;
}
.container form .form{
position: absolute;
background-color: #fff;
transition: 0.3s ease;
}
.container form .form.second{
opacity: 0;
pointer-events: none;
transform: translateX(100%);
}
form.secActive .form.second{
opacity: 1;
pointer-events: auto;
transform: translateX(0);
}
form.secActive .form.first{
opacity: 0;
pointer-events: none;
transform: translateX(-100%);
}
.container form .title{
display: block;
margin-bottom: 8px;
font-size: 16px;
font-weight: 500;
margin: 6px 0;
color: #333;
}
.container form .fields{
display: flex;
align-items: center;
justify-content: space-between;
flex-wrap: wrap;
}
form .fields .input-field{
display: flex;
width: calc(100% / 2 - 15px);
flex-direction: column;
margin: 4px 0;
}
.input-field label{
font-size: 12px;
font-weight: 500;
color: #2e2e2e;
}
.input-field input, select{
outline: none;
font-size: 14px;
font-weight: 400;
color: #333;
border-radius: 5px;
border: 1px solid #aaa;
padding: 0 15px;
height: 42px;
margin: 8px 0;
}
.input-field input:focus,
.input-field select:focus{
box-shadow: 1px 2px 3px 1px rgba(24, 179, 226, 0.958);
}
.input-field select,
.input-field input[type="date"]{
color: #707070;
}
.input-field input[type="date"]:valid{
color: #333;
}
.container form button, .backBtn{
display: flex;
align-items: center;
justify-content: center;
height: 45px;
max-width: 200px;
width: 100%;
border: none;
outline: none;
color: #fff;
border-radius: 5px;
margin: 25px 340px;
background-color: #4070f4;
transition: all 0.3s linear;
cursor: pointer;
}
.container form .btnText{
font-size: 14px;
font-weight: 400;
}
form button:hover{
background-color: #265df2;
}
form button i,
form .backBtn i{
margin: 0 6px;
}
form .backBtn i{
transform: rotate(180deg);
}
form .buttons{
display: flex;
align-items: center;
}
form .buttons button , .backBtn{
margin-right: 14px;
}

@media (max-width: 750px) {
.container form{
    overflow-y: scroll;
}
.container form::-webkit-scrollbar{
   display: none;
}
form .fields .input-field{
    width: calc(100% / 1 - 15px);
}
}

@media (max-width: 550px) {
form .fields .input-field{
    width: 100%;
}
}

</style>

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
  <div class="container">
       
  

    <header>Add Products</header>
        

        <form action="manage_product.php" method="post" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    

                    <div class="fields">
                        <div class="input-field">
                            <label for="productname">ProductName</label>
                            <input type="text" name="productname" id="productname" required>
                        </div>

                        <div class="input-field" >
                            <label for="price">Price</label>
                            <input class="show" type="text" name="price" id="price" required>
                        </div>

                        <div class="input-field">
                            <label for="qut">Quantity</label>
                            <input type="number" name="qut" id="qut" min="1" required>
                        </div>

                        <div class="input-field">
                            <label for="grender">Gender</label>
                            <select name="gender" id="gender" required>
                                <option disabled selected>Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="cat">Category</label>
                            <select name="category" id="cat" required>
                                <option disabled selected>Select Category</option>
                                <option value="shirt">Shirt</option>
                                <option value="t-Shirt">T-Shirt</option>
                                <option value="pant">Pant</option>
                                <option value="jacket">Jacket</option>
                                <option value="dress">Dress</option>
                                <option value="legghines">Legghines</option>
                                <option value="crop-top">Crop-Top</option>
                            </select>
                        </div>

                       

                        <div class="input-field">
                            <label for="size">Size</label>
                            <select name="size" id="size" required>
                                <option disabled selected>Select Size</option>
                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                                <option value="xl">Xl</option>
                                <option value="xxl">XXL</option>
                                <option value="xxxl">XXXl</option>
                            </select>
                        </div>


                        <div class="input-field">
                            <label for="img">Image</label>
                            <input type="file"name="image" id="img" required>
                        </div>
                    </div>
                </div>

                <button type="submit" name="add">
                  <span class="btnText">Submit</span>
                  <i class="uil uil-navigator"></i>
              </button>
            </div>

           
        </form>
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
    <script src="script.js"></script>

<!-- jQuery -->
</body>
</html>
