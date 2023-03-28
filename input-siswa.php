<?php 

include 'koneksi.php';
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$id_spp = $_POST['id_spp'];

$data = mysqli_query($koneksi, "INSERT INTO `siswa`(`nisn`, `nis`, `nama`, `kelas`, `alamat`, `no_telp`, `id_spp`) VALUES ('$nisn','$nis','$nama','$kelas','$alamat','$no_telp','$id_spp')");

header("location:siswa.php");
 
?>