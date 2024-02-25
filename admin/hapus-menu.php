<?php
	session_start();
	if (empty($_SESSION['id_user'])){
		header("location:../login.php");
	}

	include "koneksi.php";
	$id=$_GET['id'];

	$hapus=$koneksi->query("delete from dt_menu where id_menu='$id'");

	if($hapus==true){
		header("location:data-menu.php?pesan=hapusMenuBerhasil");
	} else{
		echo "Error";
	}

?>