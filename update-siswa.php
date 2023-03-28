<?php 
 
include 'koneksi.php';
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$id_spp = $_POST['id_spp'];
 
mysqli_query($koneksi, "UPDATE `siswa` SET `nisn`='$nisn',`nis`='$nis',`nama`='$nama',`kelas`='$kelas',`alamat`='$alamat',`no_telp`='$no_telp',`id_spp`='$id_spp' WHERE nisn='$nisn'");

header("location:siswa.php?pesan=berhasil!");
?>