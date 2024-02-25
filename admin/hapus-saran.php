<?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}

	include "koneksi.php";
	$id=$_GET['id'];

	$hapus=$koneksi->query("delete from dt_saran where id_saran='$id'");

	if($hapus==true){
		header("location:saran.php?pesan=hapusKritikBerhasil");
	} else{
		echo "Error";
	}

?>