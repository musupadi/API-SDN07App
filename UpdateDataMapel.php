<?php 

require_once "Connection.php";
$id_mapel = $_POST["id_mapel"];
$nama_mapel = $_POST['nama_mapel'];
$tingkat_kelas = $_POST['tingkat_kelas'];


$sql = "SELECT * FROM mata_pelajaran WHERE id_mapel = '$id_mapel'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$sqlInsert = "UPDATE mata_pelajaran SET nama_mapel = '$nama_mapel',tingkat_kelas = '$tingkat_kelas' WHERE id_mapel = '$id_mapel'";
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