<?php include("includes/connect.php");
$id=$_GET['id'];
$s="SELECT * FROM `register` WHERE `id`='".$id."'";
$q=mysqli_query($conn,$s);
$res=mysqli_fetch_array($q);
if (isset($_POST['submit'])) {

     $user = $_POST['user'];
     $email = $_POST['email'];
      $dob = $_POST['dob'];
     $mobile = $_POST['mobile'];
     $password = $_POST['password'];
     $cpassword = $_POST['cpassword'];
   

 $update = "UPDATE `register` SET `user`='".$user."',`email`='".$email."',`dob`='".$dob."',`mobile`='".$mobile."',`password`='".$password."' where id='$id' ";

$q = mysqli_query($conn,$update);


if($q){
   
    
    echo '<script>alert("Successfully update")</script>';
    echo '<script>window.location.href = "view.php";</script>';
    
}else{
    echo '<script>alert("Not Successfully update")</script>';
    echo '<script>window.location.href = "view.php";</script>';
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
            <h3  class="text-centers">User Update</h3>
        </div>
    </div>
<div class="row">
 <div class="col-md-6">
 <form method="post" action="">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name*</label>
    <input type="text" class="form-control"  name="user"  required  value="<?php echo $res['user']?>">
    </div>
  <div class="mb-3 ">
  <label for="exampleInputEmail1" class="form-label">Email address*</label>
    <input type="email" class="form-control"  name="email" value="<?php echo $res['email']?>" required>
   
  </div>
  <div class="mb-3 ">
  <label for="exampleInputDate" class="form-label">DOB*</label>
    <input type="date" class="form-control"  name="dob" value="<?php echo $res['dob']?>" required>
   
  </div>
  <div class="mb-3 ">
  <label for="exampleInputMobile" class="form-label">Mobile No*</label>
    <input type="tel" class="form-control"  name="mobile" maxlength="13" value="<?php echo $res['mobile']?>" minlength="10" required>
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" value="<?php echo $res['password']?>" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password*</label>
    <input type="password" class="form-control" name="cpassword" value="<?php echo $res['password']?>">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

 </div>
</div>
   </div>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>