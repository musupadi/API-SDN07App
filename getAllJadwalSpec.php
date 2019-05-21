<?php 
	require_once 'Connection.php';

	$id_kelas = $_POST['id_kelas'];
	$hari = $_POST['hari'];

	if ($id_kelas == '') {
		$query = "SELECT a.nip,b.nama,d.nama_kelas,c.nama_mapel,a.hari,a.dari_jam,a.sampai_jam FROM jadwal a JOIN guru b ON a.nip=b.nip JOIN mata_pelajaran c ON a.id_mapel=c.id_mapel JOIN kelas d ON a.id_kelas=d.id_kelas WHERE a.hari = '$hari'";	
	}else if($hari == ''){
		$query = "SELECT a.nip,b.nama,d.nama_kelas,c.nama_mapel,a.hari,a.dari_jam,a.sampai_jam FROM jadwal a JOIN guru b ON a.nip=b.nip JOIN mata_pelajaran c ON a.id_mapel=c.id_mapel JOIN kelas d ON a.id_kelas=d.id_kelas WHERE a.id_kelas = '$id_kelas'";	
	}else{
		$query = "SELECT a.nip,b.nama,d.nama_kelas,c.nama_mapel,a.hari,a.dari_jam,a.sampai_jam FROM jadwal a JOIN guru b ON a.nip=b.nip JOIN mata_pelajaran c ON a.id_mapel=c.id_mapel JOIN kelas d ON a.id_kelas=d.id_kelas WHERE a.id_kelas = '$id_kelas' AND a.hari = '$hari'";	
	}
	
	$result = mysqli_query($conn,$query);

	$array = array();

	while($row = mysqli_fetch_assoc($result)){
		$array[] = $row;
	}


	echo ($result) ?
	json_encode(array("kode" => 1,"result" => $array)) :
	json_encode(array("kode" => 0,"result" => "Data Tidak Ditemukan"));
 ?>