<?php 
// koneksi database
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];
 
// menginput data ke database
$data = mysqli_query($koneksi, "INSERT INTO `petugas`(`id`, `username`, `password`, `nama_petugas`, `level`) VALUES ('','$username','$password','$nama_petugas','$level')");

//header
header("location:petugas.php");
 
?>