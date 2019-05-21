<?php 
	require_once 'Connection.php';

	$id_kelas = $_POST['id_kelas'];

	$query = "SELECT * FROM kelas a WHERE id_kelas = '$id_kelas'";

	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$id_kelas = $row['id_kelas'];
		$nama_kelas = $row['nama_kelas'];
		$tingkat_kelas = $row['tingkat_kelas'];
		$status = "succes";
		echo json_encode(array("response"=>$status,"id_kelas"=>$id_kelas,"nama_kelas"=>$nama_kelas,"tingkat_kelas"=>$tingkat_kelas));
	}else{
		$status = "failed";
		echo json_encode(array("response"=>$status));
	}

	mysqli_close($conn);
 ?>