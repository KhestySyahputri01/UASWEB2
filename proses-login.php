<?php
session_start();
include "koneksi.php";
$username = $koneksi->real_escape_string($_POST['username']);
$password = $koneksi->real_escape_string(md5($_POST['password']));

$sql=$koneksi->query("SELECT * FROM login WHERE username= '$username' and password='$password'");
$row= $sql->fetch_assoc();
$result= $sql->num_rows;

if ($result==TRUE)
{
    
    $_SESSION['id_user']=$row['id_user'];
    $_SESSION['username']=$row['username'];

    header("location:admin/index.php?pesan=SelamatDatangAdmin");  
    
} else {

     echo"<script>alert('Username atau password salah !');document.location.href='login.php';</script>";

}
?>