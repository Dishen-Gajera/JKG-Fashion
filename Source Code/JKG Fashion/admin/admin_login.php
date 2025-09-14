<?php

session_start();
include("../config.php");
if(isset($_POST['login'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $result=mysqli_query($con,"SELECT * FROM adminlogin WHERE name='$name'");
    $res=mysqli_fetch_array($result);

    if($res){
      if($res['password']==$password){
        $_SESSION['name']=$_POST['name'];
        header("Location:index.php");
      }else{
        echo "<script>
        alert('Password is wrong');
        window.location.href='admin_login.php';
        </script>";
      }
      }else{
        echo "<script>
        alert('name is wrong');
        window.location.href='admin_login.php';
        </script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<section class="intro">
  <div class="bg-image h-100">
    <div class="mask d-flex align-items-center h-100" style="background-color: #f3f2f2;">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-12 col-lg-9 col-xl-8">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-4 d-none d-md-block">
                  <img
                    src="../image/adlogo.png"
                    alt="login form"
                    class="img-fluid h-100 " style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"
                  />
                </div>
                <div class="col-md-8 d-flex align-items-center">
                  <div class="card-body py-5 px-4 p-md-5">

                    <form action="" method="post">
                      <h4 class="fw-bold mb-4" style="color: #92aad0;">Welcome</h4>
                      <p class="mb-4" style="color: #45526e;">To log in, please fill in these text fiels with your name and password.</p>

                      <div class="form-outline mb-4">
                          <label class="form-label" for="form2Example1">Name</label>
                        <input type="text" id="form2Example1" class="form-control" name="name" />
                      </div>

                      <div class="form-outline mb-4">
                          <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="form2Example2" class="form-control" name="password" />
                      </div>

                      <div class="d-flex justify-content-end pt-1 mb-4">
                        <button class="btn btn-primary btn-rounded" type="submit" class="btn-primary" name="login">Log in</button>
                      </div>
                      <hr>
                     
                     
                    </form>

                  </div>
                </div>
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