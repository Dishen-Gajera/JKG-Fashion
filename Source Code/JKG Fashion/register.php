<?php
include("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['uname'];
    $number=$_POST['number'];
  
    $password=$_POST['password'];
    $cpassword=$_POST['confirmPassword'];

    $result=mysqli_query($con,"SELECT * FROM user WHERE number='$number'");
    $res=mysqli_num_rows($result);

    if($res!=1){
        if($password==$cpassword){
            $sql=mysqli_query($con,"INSERT INTO  `user` (`user_name`,`number`,`password`) VALUES ('$name','$number','$password')") ; 
            header("Location:login.php");
        }else{
            echo "<script>
            alert('password and confirm password is not same');
            window.location.href='register.php';
            </script>";
        }
    }else{
        echo "<script>
        alert('number already registered');
        window.location.href='register.php';
        </script>";
    }
    

    

    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
                <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-1">Sign up</p>

                    <form class="mx-1 mx-md-4" action="" method="post">

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Your Name</label>
                        <input type="text" id="form3Example1c" class="form-control" name="uname" />
                        </div>
                    </div>
                    

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Mo.Number</label>
                        <input type="text" id="form3Example3c" class="form-control" name="number" pattern="[1-9]{1}[0-9]{9}" title="enter 10 digit number"/>
                        </div>
                    </div>

             

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Password</label>
                        <input type="password" id="form3Example4c" class="form-control" name="password" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                        <input type="password" id="form3Example4cd" class="form-control" name="confirmPassword"/>
                        </div>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-9">
                        
                    Click here for &nbsp;<a href="login.php">Login</a>
                        </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <input  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" name="submit" value="register"> 
                    </div>

                    </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                    <img src="image/regpic.jpg"
                    class="img-fluid" alt="Sample image">

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</body>
</html>
