 <?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}
?>
<?php 
include "../koneksi.php";
$id=$_POST['id_order'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$total=$_POST['total'];



$ubah=$koneksi->query("UPDATE dt_order set nama='$nama', jumlah='$jumlah', total='$total' where id_order='$id'");

if($ubah==true){
	header("location:data-order.php?pesan=editOrderBerhasil");
} else{
	echo "Error";
}

?>