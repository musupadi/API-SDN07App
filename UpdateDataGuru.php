<?php 

require_once "Connection.php";
$nip = $_POST["nip"];
$password = $_POST['password'];
$nama = $_POST['nama'];
$tempatlahir = $_POST['tempatlahir'];
$tanggalahir = $_POST['tanggalahir'];
$agama = $_POST['agama'];
$notelp = $_POST['notelp'];
$jabatan = $_POST['jabatan'];
$pendidikan = $_POST['pendidikan'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];


$sql = "SELECT * FROM guru WHERE nip = '$nip'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$sqlInsert = "UPDATE guru SET nama = '$nama',password = '$password',tempatlahir = '$tempatlahir',tanggalahir = '$tanggalahir', agama = '$agama', notelp = '$notelp', jabatan = '$jabatan', pendidikan = '$pendidikan', jk = '$jk', alamat = '$alamat' WHERE nip = '$nip'";
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