<?php 
	require_once 'Connection.php';

	$nip= $_POST['nip'];

	$query = "SELECT * FROM guru WHERE nip = '$nip'";

	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$nip = $row['nip'];
		$nama =$row['nama'];
		$password = $row['password'];
		$tempatlahir = $row['tempatlahir'];
		$tanggalahir = $row['tanggalahir'];
		$agama = $row['agama'];
		$notelp = $row['notelp'];
		$jabatan = $row['jabatan'];
		$pendidikan = $row['pendidikan'];
		$jk = $row['jk'];
		$alamat = $row['alamat'];
		$status = "succes";
		echo json_encode(array("response"=>$status,"nip"=>$nip,"nama"=>$nama,"password"=>$password,"tempatlahir"=>$tempatlahir,"tanggalahir"=>$tanggalahir,"agama"=>$agama,"notelp"=>$notelp,"jabatan"=>$jabatan,"jk"=>$jk,"alamat"=>$alamat,"status"=>$status));
	}else{
		$status = "failed";
		echo json_encode(array("response"=>$status));
	}

	mysqli_close($conn);
 ?>