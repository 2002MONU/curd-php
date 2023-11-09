<?php 

 include('includes/connect.php');
 $myid = $_GET['id'];
 $get = "DELETE FROM `register` WHERE id='".$myid."'";

$query = mysqli_query($conn,$get);

if ($query) {
	echo '<script> alert("delete successfully")</script>';
	echo '<script> window.location.href="view.php"</script>';
}else{
	echo "something wrong";
}

?>