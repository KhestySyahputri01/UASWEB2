 <?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}
?>
<?php 
include "koneksi.php";
$id=$_POST['id_pelanggan'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];


$ubah=$koneksi->query("UPDATE dt_pelanggan set nama='$nama', email='$email', no_hp='$no_hp', alamat='$alamat' where id_pelanggan='$id'");

if($ubah==true){
	header("location:data-pelanggan.php?pesan=editPelangganBerhasil");
} else{
	echo "Error";
}

?>