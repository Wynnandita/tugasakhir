<?php

include '../koneksi.php';

$id_petugas=$_GET['id_petugas'];

$res=mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas=$id_petugas");
echo "<script> alert('Data berhasil dihapus'); window.location='index.php'</script>";
// var_dump($res);
?> 
