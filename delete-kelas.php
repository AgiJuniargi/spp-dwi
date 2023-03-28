<?php 

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM `kelas` WHERE id='$id'");


?>