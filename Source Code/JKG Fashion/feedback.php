<?php
include_once("header.php");
include_once("config.php");


 
  
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $number=$_POST['number'];
  $feedback=$_POST['feedback'];

  
    $sql="INSERT INTO `feedback`(`name`, `number`, `feedback`) VALUES ('$name','$number','$feedback')";
    $result=mysqli_query($con,$sql);

  
 
  
 

  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        pre{
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="container " style="margin-top: 3cm; margin-bottom:3cm;">
      <h4><pre>                            <mark class="text-danger">Note : *Please First do login process for the feedback</mark></pre></h4>
        <form action="" method="post">

       
            <div class="row justify-content-center ">
                <div class="col-6">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control border border-dark bg-light" id="name"
                            placeholder="Enter your name hear" required>
                    </div>
                </div>



            </div>



            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="feedback" class="form-label">Feedback</label>
                        <textarea class="form-control border border-dark bg-light" id="feedback" name="feedback"
                            rows="4" placeholder="Please enter your problem or response about our servive"
                            required></textarea>
                    </div>
                </div>
            </div>
            <?php
                        if(isset($_SESSION['number'])==0){
                        ?>

            <div class="row justify-content-center mt-1">
                <div class="col-6">
                    <a href="login.php" class="btn btn-primary px-5">Submit</a>
                </div>
            </div>

            <?php
                        }
        else{

          ?>
           <input type="hidden" name="number" value="<?php echo $_SESSION['number']; ?>">
            <div class="row justify-content-center mt-1">
                <div class="col-6">
                    <button type="submit" name="submit" class="btn btn-primary px-5">Submit</button>
                </div>
            </div>
            <?php
        }
        ?>
        </form>
    </div>
</body>

</html>
<?php
  include_once("footer.php");
  ?>