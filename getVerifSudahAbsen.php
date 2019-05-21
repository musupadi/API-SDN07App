<?php 
	require_once 'Connection.php';

	$query = "SELECT c.nama_siswa,d.nama_mapel,a.nilai,b.nama,a.verif FROM nilai_siswa a JOIN guru b on a.nip=b.nip JOIN siswa c ON a.nis=c.nis JOIN mata_pelajaran d ON a.id_mapel=d.id_mapel WHERE a.verif='belum'";

	$result = mysqli_query($conn,$query);

	$array = array();

	while($row = mysqli_fetch_assoc($result)){
		$array[] = $row;
	}


	echo ($result) ?
	json_encode(array("kode" => 1,"result" => $array)) :
	json_encode(array("kode" => 0,"result" => "Data Tidak Ditemukan"));
 ?>