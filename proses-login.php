<?php
session_start();
include 'koneksi.php';

if (isset($_POST['btn-login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "SELECT id_petugas, nama FROM petugas WHERE username = '$username', AND password = '$password'";
	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);
	// var_dump($res);

	if ($count ) {
		$data_login = mysqli_fetch_assoc($res);


		$_SESSION['id_petugas']	  = $data_login['id_petugas'];
		$_SESSION['nama_petugas'] = $data_login['nama_petugas'];

		header("location: http://localhost/tugasweb/utama.php");
	 }else{
	// 	header("location: http://localhost/tugasweb/login.php");
		var_dump($res);
}
}
?>