<?php 
require_once "Connection.php";
$nip = $_POST['nip'];
$id_kelas = $_POST['id_kelas'];
$id_mapel = $_POST['id_mapel'];
$hari = $_POST['hari'];
$dari_jam = $_POST['dari_jam'];
$sampai_jam = $_POST['sampai_jam'];


$sql = "SELECT * FROM jadwal WHERE id_kelas = '$id_kelas' AND hari= '$hari' AND dari_jam = '$dari_jam' AND sampai_jam = '$sampai_jam'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	$ress = "Update";
}else{
$sqlInsert = "INSERT INTO jadwal(nip,id_kelas,id_mapel,hari,dari_jam,sampai_jam) VALUES ('$nip','$id_kelas','$id_mapel','$hari','$dari_jam','$sampai_jam');";
if(mysqli_query($conn,$sqlInsert)){
	$ress = "Insert";
}else{
	$ress = "Error";
}
}
echo json_encode(array("response"=>$ress));

mysqli_close($conn);


 ?>

 