<?php 
require "Connection.php";

$nis = $_POST['nis'];

$sql = "SELECT * FROM raport_siswa WHERE nis = '$nis' AND verif = 'sudah'";

$result = mysqli_query($conn,$sql);
$status = "";
$izin=null;
$sakit=null;
$alpa=null;
if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$izin = $row['izin'];
	$sakit = $row['sakit'];
	$alpa = $row['alpa'];
	$status = "Succes";
	echo json_encode(array("response"=>$status,"izin"=>$izin,"sakit"=>$sakit,"alpa"=>$alpa));
}else{
	$status = "Failed";
	echo json_encode(array("response"=>$status));
}

mysqli_close($conn);

 ?>