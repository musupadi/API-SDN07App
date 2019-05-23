<?php 

require_once "Connection.php";
$id_jadwal = $_POST["id_mapel"];
$nip = $_POST['nip'];
$id_kelas = $_POST['id_kelas'];
$id_mapel = $_POST['id_mapel'];
$hari = $_POST['hari'];
$dari_jam = $_POST['dari_jam'];
$sampai_jam = $_POST['sampai_jam'];


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