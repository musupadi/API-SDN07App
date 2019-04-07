<?php 
require "Connection.php";

$username = $_POST['username'];

$sql = "SELECT * FROM admin WHERE username = '$username'";

$result = mysqli_query($conn,$sql);
$status = "";
$nama_admin= NULL;
$profile_admin= NULL;
if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$nama_admin = $row['nama_admin'];
	$profile_admin = $row['profile_admin'];
	$status = "succes";
	echo json_encode(array("response"=>$status,"nama_admin"=>$nama_admin,"profile_admin"=>$profile_admin));
}else{
	$status = "Failed";
	echo json_encode(array("response"=>$status));
}

mysqli_close($conn);

 ?>