 <?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:login.php");
	}
?>
<?php

$nama=$_POST['nama'];
$email=$_POST['email'];
$kritik=$_POST['kritik'];


include "koneksi.php";

$simpan=$koneksi->query("insert into dt_saran
	(nama,email,kritik) values 
	( '$nama', '$email', '$kritik' )");

if($simpan==true){

	header("location:admin/saran.php?pesan=KritikBerhasil");
} else{
	echo "Error";
}

?>

 