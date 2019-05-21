<?php 
require_once "Connection.php";
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$jk_siswa = $_POST['jk_siswa'];
$tahunajaran = $_POST['tahunajaran'];
$namaibu = $_POST['namaibu'];
$namaayah = $_POST['namaayah'];
$pekerjaanayah = $_POST['pekerjaanayah'];
$pekerjaanibu = $_POST['pekerjaanibu'];
$id_kelas = $_POST['id_kelas'];
$profile_siswa = $_POST['profile_siswa'];

$sql = "SELECT * FROM siswa WHERE nis = '$nis'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$ress = "Update";
}else{
	$sqlInsert = "INSERT INTO siswa(nis,nama_siswa,jk_siswa,tahunajaran,namaibu,namaayah,pekerjaanayah,pekerjaanibu,id_kelas,profile_siswa) VALUES ('$nis','$nama_siswa','$jk_siswa','$tahunajaran','$namaibu','$namaayah','$pekerjaanayah','$pekerjaanibu','$id_kelas','$profile_siswa');";
	if(mysqli_query($conn,$sqlInsert)){
		$ress = "Insert";
	}else{
		$ress = "Error";
	}
}

echo json_encode(array("response"=>$ress));

mysqli_close($conn);


 ?>

 