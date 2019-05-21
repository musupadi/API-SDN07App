<?php 
	require_once 'Connection.php';

	$nama = $_POST['nama'];
	$nip = $_POST['nip'];

	$sql = null;
	if ($nip=='') {
		$sql = "SELECT * FROM guru WHERE nama = '$nama'";	
	}else if($nama==''){
		$sql = "SELECT * FROM guru WHERE nip = '$nip'";
	}else{
		$sql = "SELECT * FROM guru WHERE nip = '$nip' AND nama = '$nama'";
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