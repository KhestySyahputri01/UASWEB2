<?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}
?>
<?php
$id_menu=$_POST['id_menu'];
$nama=$_POST['nama'];
$jenis_menu=$_POST['jenis_menu'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$menu=$_POST['menu'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into dt_menu
	(id_menu,nama,jenis_menu,jumlah,harga,menu) values 
	('$id_menu', '$nama', '$jenis_menu', '$jumlah', '$harga',
	                      '$menu')");

if($simpan==true){

	header("location:data-menu.php?pesan=inputMenuBerhasil");
} else{
	echo "Error";
}

?>

 