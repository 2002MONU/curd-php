<?php
 session_start();


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>User View</title>
  </head>
  <body>
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Customer view his/her Data</h3>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name </th>
      <th scope="col">Email</th>
      <th scope="col">DOB</th>
      <th scope="col">Mobile NO</th>
      <th scope="col">Password</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>

  <tbody>
  <?php include 'includes/connect.php';

$sql ="SELECT * FROM `register`";
$query = mysqli_query($conn , $sql);
$i =1;
while ($result =mysqli_fetch_array($query)) 
{

?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $result['user']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td><?php echo $result['dob']; ?></td>
      <td><?php echo $result['mobile']; ?></td>
      <td><?php echo $result['password']; ?></td>
      <td> <button class="btn-danger"><a href="update.php?id=<?php echo $result['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a></button></td>
     <td> <button class="btn-danger"><a href="delete.php?id=<?php echo $result['id'] ?>"><i class="fa-solid fa-trash"></i> </a></button></td>
    </tr>
    <?php }?>
  </tbody>
</table>
        </div>
    </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>