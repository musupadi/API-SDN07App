<?php 
require "Connection.php";



$nama = $_POST['nama'];
$nip = $_POST['nip'];
$sql = null;

if ($nip=='') {
	$sql = "SELECT * FROM guru WHERE nama = '$nama'";	
}else if($nama==''){
	$sql = "SELECT * FROM guru WHERE nip = '$nip'";
}else{
	$sql = "SELECT * FROM guru WHERE nip = '$nip' AND nama = '$nama'";
}


$result = mysqli_query($conn,$sql);
$status = "";
if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$nip = $row['nip'];
	$nama = $row['nama'];
	$status = "succes";
	echo json_encode(array("response"=>$status,"nip"=>$nip,"nama"=>$nama));
}else{
	$status = "Failed";
	echo json_encode(array("response"=>$status));
}

mysqli_close($conn);

 ?>