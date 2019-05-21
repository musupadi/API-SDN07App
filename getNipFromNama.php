<?php 
	require_once 'Connection.php';

	$nama= $_POST['nama'];

	$query = "SELECT * FROM guru WHERE nama = '$nama'";

	$result = mysqli_query($conn,$query);
	$nip=null
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$nip = $row['nip'];
		$status = "succes";
		echo json_encode(array("response"=>$status,"nip"=>$nip));
	}else{
		$status = "failed";
		echo json_encode(array("response"=>$status));
	}

	mysqli_close($conn);
 ?>