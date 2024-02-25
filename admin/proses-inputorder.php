<?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}
?>
<?php
$id_order=$_POST['id_order'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$total=$_POST['total'];



include "../koneksi.php";

$simpan=$koneksi->query("insert into dt_order
	(id_order,nama,jumlah,total) values 
	('$id_order', '$nama', '$jumlah', '$total'
	                      )");

if($simpan==true){

	header("location:data-order.php?pesan=inputOrderBerhasil");
} else{
	echo "Error";
}

?>

 