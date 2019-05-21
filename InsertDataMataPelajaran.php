<?php 
require_once "Connection.php";
$nama_mapel = $_POST['nama_mapel'];
$tingkat_kelas = $_POST['tingkat_kelas'];

$sql = "SELECT * FROM mata_pelajaran WHERE nama_mapel = '$nama_mapel'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$ress = "Update";
}else{
	$sqlInsert = "INSERT INTO mata_pelajaran(nama_mapel,tingkat_kelas) VALUES ('$nama_mapel','$tingkat_kelas');";
	if(mysqli_query($conn,$sqlInsert)){
		$ress = "Insert";
	}else{
		$ress = "Error";
	}
}

echo json_encode(array("response"=>$ress));

mysqli_close($conn);


 ?>

 