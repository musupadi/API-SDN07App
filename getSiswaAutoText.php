<?php 
	require_once 'Connection.php';

	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	if ($nama_siswa=='') {
		$sql = "SELECT * FROM siswa WHERE nis = '$nis'";	
	}else if($nis==''){
		$sql = "SELECT * FROM siswa WHERE nama_siswa = '$nama_siswa'";
	}else{
		$sql = "SELECT * FROM siswa WHERE nis = '$nis' AND nama_siswa = '$nama_siswa'";
	}
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$nis = $row['nis'];
		$nama_siswa = $row['nama_siswa'];
		$status = "succes";
		echo json_encode(array("response"=>$status,"nis"=>$nis,"nama_siswa"=>$nama_siswa));
	}else{
		$status = "Failed";
		echo json_encode(array("response"=>$status));
	}

	mysqli_close($conn);

	

 ?>