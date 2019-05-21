<?php 
	require_once 'Connection.php';

	$verif = $_POST['verif'];

	$query = "SELECT c.profile_siswa,c.nis,b.nip,b.nama,c.nama_siswa,a.sakit,a.izin,a.alpa,a.verif FROM raport_siswa a JOIN guru b on a.nip=b.nip JOIN siswa c ON a.nis=c.nis WHERE a.verif='$verif'";

	$result = mysqli_query($conn,$query);

	$array = array();

	while($row = mysqli_fetch_assoc($result)){
		$array[] = $row;
	}


	echo ($result) ?
	json_encode(array("kode" => 1,"result" => $array)) :
	json_encode(array("kode" => 0,"result" => "Data Tidak Ditemukan"));
 ?>