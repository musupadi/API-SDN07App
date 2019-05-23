<?php 
	include_once('connection.php');

	$id_mapel = $_POST['id_mapel'];

	$getdata = mysqli_query($conn,"SELECT * FROM mata_pelajaran WHERE id_mapel = '$id_mapel'");
	$rows = mysqli_num_rows($getdata);
	$delete = "DELETE FROM mata_pelajaran WHERE id_mapel = '$id_mapel'";
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