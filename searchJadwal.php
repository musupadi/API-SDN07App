<?php 
	require_once 'Connection.php';

	$id_mapel = $_POST['id_mapel'];
	$tingkat_kelas = $_POST['tingkat_kelas'];

	$query = "SELECT a.nip,b.nama,d.nama_kelas,c.nama_mapel,a.hari,a.dari_jam,a.sampai_jam FROM jadwal a JOIN guru b ON a.nip=b.nip JOIN mata_pelajaran c ON a.id_mapel=c.id_mapel JOIN kelas d ON a.id_kelas=d.id_kelas WHERE d.tingkat_kelas= '$tingkat_kelas' AND a.id_mapel = '$id_mapel'";

	$result = mysqli_query($conn,$query);

	$array = array();

	while($row = mysqli_fetch_assoc($result)){
		$array[] = $row;
	}


	echo ($result) ?
	json_encode(array("kode" => 1,"result" => $array)) :
	json_encode(array("kode" => 0,"result" => "Data Tidak Ditemukan"));
 ?>