<?php

include '../koneksi.php';

$id_pasien=$_GET['id_pasien'];

$res=mysqli_query($koneksi, "DELETE FROM pasien WHERE id_pasien=$id_pasien");
echo "<script> alert('Data berhasil dihapus'); window.location='index.php'</script>";
// var_dump($res);
?> 
