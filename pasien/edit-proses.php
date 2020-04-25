<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
	$id_pasien = $_POST['id_pasien'];
	$nama 	   = $_POST['nama'];
	$alamat    = $_POST['alamat'];
	$telp 	   = $_POST['telp'];
	$usia 	   = $_POST['usia'];
	$suhu 	   = $_POST['suhu'];

	$sql = "UPDATE pasien SET nama='$nama', alamat='$alamat', telp=$telp, usia=$usia, suhu=$suhu where id_pasien = $id_pasien";

	$res = mysqli_query($koneksi, $sql);

	$count = mysqli_affected_rows($koneksi);
	echo "<script>
			alert('Data berhasil diubah');
			window.location='index.php'
		  </script>";
	
}else{
	echo "<script>
			alert('Data gagal diubah');
			window.location='edit.php'
		  </script>";
	var_dump($res);
}
?>