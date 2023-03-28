<?php 
session_start();
 
include 'koneksi.php';
 
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
 
$result = mysqli_query($koneksi,"SELECT * FROM siswa where nisn='$nisn' and nis='$nis'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	$_SESSION['nisn'] = $nisn;
	$_SESSION['nis'] = $data['nis'];
	header("location:beranda.php");
} else {
	header("location:login-siswa-gagal.php");
}
?>