<?php include("includes/connect.php");
if (isset($_POST['submit'])) {

     $user = $_POST['user'];
     $email = $_POST['email'];
      $dob = $_POST['dob'];
     $mobile = $_POST['mobile'];
     $password = $_POST['password'];
     $cpassword = $_POST['cpassword'];
   
        if($password == $cpassword){
               $query = "INSERT INTO `register`( `user`, `email`, `dob`, `mobile`, `password`) VALUES ('".$user."','".$email."','".$dob."','".$mobile."','".$password."')";
              
                $result =mysqli_query($conn,$query);
                if ($result) {
                    echo "<script>alert('Register  successfully ')</script>";
                    echo '<script> window.location.href="login.php"</script>';
                }else{
                    echo "<script>alert('Register do not  successfully ')</script>";
                    
                }
            }else{
                echo "<script>alert('Please check password and confirm password')</script>";
               
            }
            
    }


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Register</title>
  </head>
  <body>
   <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3  class="text-centers">User Register</h3>
        </div>
    </div>
<div class="row">
 <div class="col-md-6">
 <form method="post" action="">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name*</label>
    <input type="text" class="form-control"  name="user"  required>
    </div>
  <div class="mb-3 ">
  <label for="exampleInputEmail1" class="form-label">Email address*</label>
    <input type="email" class="form-control"  name="email" required>
   
  </div>
  <div class="mb-3 ">
  <label for="exampleInputDate" class="form-label">DOB*</label>
    <input type="date" class="form-control"  name="dob" required>
   
  </div>
  <div class="mb-3 ">
  <label for="exampleInputMobile" class="form-label">Mobile No*</label>
    <input type="tel" class="form-control"  name="mobile" maxlength="13" minlength="10" required>
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password"  >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password*</label>
    <input type="password" class="form-control" name="cpassword">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

 </div>
</div>
   </div>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>