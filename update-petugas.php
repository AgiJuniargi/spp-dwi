<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];
 
mysqli_query($koneksi, "UPDATE petugas SET username='$username', password='$password', nama_petugas='$nama_petugas', level='$level' WHERE id='$id'");

header("location:petugas.php?pesan=berhasil!");
?>