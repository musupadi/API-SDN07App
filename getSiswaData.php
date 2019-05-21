<?php 
	require_once 'Connection.php';

	$nama_siswa = $_POST['nama_siswa'];
	$nis = $_POST['nis'];
	
	if ($nis=='') {
		$sql = "SELECT * FROM siswa WHERE nama_siswa = '$nama_siswa'";	
	}else if($nama_siswa==''){
		$sql = "SELECT * FROM siswa WHERE nis = '$nis'";
	}else{
		$sql = "SELECT * FROM siswa WHERE nis = '$nis' AND nama_siswa = '$nama_siswa'";
	}

	$result = mysqli_query($conn,$sql);

	$array = array();

	while($row = mysqli_fetch_assoc($result)){
		$array[] = $row;
	}


	echo ($result) ?
	json_encode(array("kode" => 1,"result" => $array)) :
	json_encode(array("kode" => 0,"result" => "Data Tidak Ditemukan"));
 ?>