<?php 
require_once "Connection.php";
$nis = $_POST["nis"];
$mata_pelajaran = $_POST['mata_pelajaran'];
$nilai = $_POST['nilai'];

$sql = "SELECT * FROM nilai_siswa WHERE nis = '$nis'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$sqlUpdate = "UPDATE nilai_siswa SET nilai = '$nilai' WHERE nis = '$nis' AND id_mapel = '$mata_pelajaran'";
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