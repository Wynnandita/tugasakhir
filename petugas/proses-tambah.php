<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$usia = $_POST['usia'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO petugas ( nama, usia, alamat, telp, username, password)
			VALUES ('$nama', '$usia', '$alamat', '$telp', '$username', '$password')";

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
