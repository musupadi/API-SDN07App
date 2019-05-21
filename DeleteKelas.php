<?php 
	include_once('connection.php');

	$id_kelas = $_POST['id_kelas'];

	$getdata = mysqli_query($conn,"SELECT * FROM kelas WHERE id_kelas = '$id_kelas'");
	$rows = mysqli_num_rows($getdata);
	$delete = "DELETE FROM kelas WHERE id_kelas = '$id_kelas'";
	$exedelete = mysqli_query($conn,$delete);
	$repose = array();

	if($rows>0){
		if($exedelete){
			$response['code']=1;
			$response['response']="Delete Succes";
		}else{
			$response['code']=2;
			$response['response']="Delete Failed";
	}
	}else{
		$response['code']=3;
		$response['response']="Delete Failed,Data not Found";
	}
	

	echo json_encode($response);
 ?>