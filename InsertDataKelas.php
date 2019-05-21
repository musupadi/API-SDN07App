<?php 
require_once "Connection.php";
$nama_kelas = $_POST['nama_kelas'];
$tingkat_kelas = $_POST['tingkat_kelas'];

$sql = "SELECT * FROM kelas WHERE nama_kelas = '$nama_kelas'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$ress = "Update";
}else{
	$sqlInsert = "INSERT INTO kelas(nama_kelas,tingkat_kelas) VALUES ('$nama_kelas','$tingkat_kelas');";
	if(mysqli_query($conn,$sqlInsert)){
		$ress = "Insert";
	}else{
		$ress = "Error";
	}
}

echo json_encode(array("response"=>$ress));

mysqli_close($conn);


 ?>

 