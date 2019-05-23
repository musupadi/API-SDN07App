<?php 
	require_once 'Connection.php';

	$id_mapel = $_POST['id_mapel'];

	$query = "SELECT * FROM mata_pelajaran a WHERE id_mapel = '$id_mapel'";

	$result = mysqli_query($conn,$query);
	$id_mapel= NULL;
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$id_mapel = $row['id_mapel'];
		$nama_mapel = $row['nama_mapel'];
		$tingkat_kelas = $row['tingkat_kelas'];
		$status = "succes";
		echo json_encode(array("response"=>$status,"id_mapel"=>$id_mapel,"nama_mapel"=>$nama_mapel,"tingkat_kelas"=>$tingkat_kelas));
	}else{
		$status = "failed";
		echo json_encode(array("response"=>$status));
	}

	mysqli_close($conn);
 ?>