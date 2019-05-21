<?php 
require_once "Connection.php";
$nis = $_POST["nis"];
$sakit = $_POST['sakit'];
$izin = $_POST['izin'];
$alpa = $_POST['alpa'];

$sql = "SELECT * FROM raport_siswa WHERE nis = '$nis'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$sqlUpdate = "UPDATE raport_siswa SET sakit = '$sakit',izin = '$izin',alpa = '$alpa' WHERE nis = '$nis'";
	if(mysqli_query($conn,$sqlUpdate)){
		$ress = "Update";
	}else{
		$ress = "error";
	}
}else{
	$ress = "Insert";
}

echo json_encode(array("response"=>$ress));

mysqli_close($conn);


 ?>