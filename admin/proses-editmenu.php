 <?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}
?>
<?php 
include "../koneksi.php";
$id=$_POST['id_menu'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$menu=$_POST['menu'];


$ubah=$koneksi->query("UPDATE dt_menu set nama='$nama', jumlah='$jumlah', harga='$harga', menu='$menu' where id_menu='$id'");

if($ubah==true){
	header("location:data-menu.php?pesan=editMenuBerhasil");
} else{
	echo "Error";
}

?>