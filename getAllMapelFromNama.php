<?php 
	require_once 'Connection.php';

	$nama_mapel = $_POST['nama_mapel'];

	$query = "SELECT * FROM mata_pelajaran WHERE nama_mapel = '$nama_mapel'";

	$result = mysqli_query($conn,$query);

	$array = array();

	while($row = mysqli_fetch_assoc($result)){
		$array[] = $row;
	}


	echo ($result) ?
	json_encode(array("kode" => 1,"result" => $array)) :
	json_encode(array("kode" => 0,"result" => "Data Tidak Ditemukan"));
 ?>