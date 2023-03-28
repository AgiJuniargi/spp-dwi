<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
 
mysqli_query($koneksi, "UPDATE `kelas` SET `nama_kelas`='$nama_kelas',`kompetensi_keahlian`='$kompetensi_keahlian' WHERE id='$id'");

header("location:kelas.php?pesan=berhasil!");
?>