<?php 
require "Connection.php";

$username = $_POST['username'];
$password = $_POST["password"];

$sql = "SELECT * FROM admin WHERE username = '$username' AND password  = '$password'";

$result = mysqli_query($conn,$sql);
$status = "";
$name= NULL;
if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$status = "succes";
	echo json_encode(array("response"=>$status));
}else{
	$status = "failed";
	echo json_encode(array("response"=>$status));
}

mysqli_close($conn);

 ?>