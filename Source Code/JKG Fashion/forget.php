<?php
include("config.php");
if(isset($_POST['submit'])){
    $number=$_POST['number'];
    $npassword=$_POST['newPassword'];
    $cpassword=$_POST['confirmPassword'];
    $result=mysqli_query($con,"SELECT * FROM user WHERE number='$number'");

    $res=mysqli_num_rows($result);

    if($res==1){
      if($npassword != $cpassword){
      echo "<script>
      alert('Password and Confirm password does not same');
      window.location.href='forget.php';
      </script>";
      }else{
      $sql=mysqli_query($con,"UPDATE user SET Password='$npassword' WHERE number='$number'");
      header("Location:login.php");
      }
    }else{
      echo "<script>
          alert('number does not exist');
          window.location.href='forget.php';
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
    <link rel="stylesheet" href="style.css">
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
                    src="image/logpic.jpg"
                    alt="login form"
                    class="img-fluid h-100 " style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"
                  />
                </div>
                <div class="col-md-8 d-flex align-items-center">
                  <div class="card-body py-5 px-4 p-md-5">

                    <form action="" method="post">
                      <h4 class="fw-bold mb-4" style="color: #92aad0;">Forgot password</h4>

                      

                      <div class="form-outline mb-4">
                          <label class="form-label" for="form2Example1">Mo.number</label>
                        <input type="text" id="form2Example1" class="form-control" name="number" pattern="[1-9]{1}[0-9]{9}" title="enter 10 digit number"/>
                      </div>

                      <div class="form-outline mb-4">
                          <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="form2Example2" class="form-control" name="newPassword"/>
                      </div>
                      <div class="form-outline mb-4">
                          <label class="form-label" for="form2Example2">Confirm Password</label>
                        <input type="password" id="form2Example2" class="form-control" name="confirmPassword"/>
                      </div>


                      <div class="d-flex justify-content-end pt-1 mb-4">
                        <button class="btn btn-primary btn-rounded" type="submit" class="btn-primary" name="submit">change password</button>
                      </div>
                      
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