<?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}
?>
<?php
$id_pelanggan=$_POST['id_pelanggan'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];

include "koneksi.php";

$simpan=$koneksi->query("insert into dt_pelanggan(id_pelanggan,nama,email,no_hp,alamat) 
	                     values ('$id_pelanggan', '$nama', '$email', '$no_hp', '$alamat')");

if($simpan==true){

	header("location:data-pelanggan.php?pesan=inputPelangganBerhasil");
} else{
	echo "Error";
}

?>

 