<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$usia = $_POST['usia'];
	$suhu = $_POST['suhu'];

	$sql = "INSERT INTO pasien ( nama, alamat, telp, usia, suhu)
			VALUES ('$nama', '$alamat', '$telp', '$usia', '$suhu')";

	$res = mysqli_query($koneksi, $sql);

	$count = mysqli_affected_rows($koneksi);

	if($count){
		echo "<script>alert('Data berhasil ditambahkan.');window.location='index.php';</script>";
	}

	
}else{
	header("location: tambah.php");
}
if(isset($_POST["kembali"])){
	header("location: index.php");
}
?>
