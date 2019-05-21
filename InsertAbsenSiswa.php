<?php 
require_once "Connection.php";
$nis = $_POST["nis"];
$nip = $_POST['nip'];
$sakit = $_POST['sakit'];
$izin = $_POST['izin'];
$alpa = $_POST['alpa'];

$sql = "SELECT * FROM raport_siswa WHERE nis = '$nis'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$ress = "Update";
}else{
	$sqlInsert = "INSERT INTO raport_siswa(nis,nip,sakit,izin,alpa,verif) VALUES ('$nis','$nip','$sakit','$izin','$alpa','belum');";
	if(mysqli_query($conn,$sqlInsert)){
		$ress = "Insert";
	}else{
		$ress = "Error";
	}
}

echo json_encode(array("response"=>$ress));

mysqli_close($conn);


 ?>

 