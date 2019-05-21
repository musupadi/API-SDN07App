<?php 

require_once "Connection.php";
$id_kelas = $_POST["id_kelas"];
$nama_kelas = $_POST['nama_kelas'];
$tingkat_kelas = $_POST['tingkat_kelas'];

$sql = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$sqlInsert = "UPDATE kelas SET nama_kelas = '$nama_kelas', tingkat_kelas = '$tingkat_kelas' WHERE id_kelas = '$id_kelas'";
	if(mysqli_query($conn,$sqlInsert)){
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