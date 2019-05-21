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

$sql = "SELECT * FROM siswa WHERE nis = '$nis'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$sqlInsert = "UPDATE siswa SET nama_siswa = '$nama_siswa',jk_siswa = '$jk_siswa',tahunajaran = '$tahunajaran', namaibu = '$namaibu', namaayah = '$namaayah', pekerjaanayah='$pekerjaanayah', pekerjaanibu= '$pekerjaanibu',id_kelas='$id_kelas' WHERE nis = '$nis'";
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