
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<h2>TAMBAH PETUGAS</h2>
	<br><br>
	<form action="proses-tambah.php" method="post">
		<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Usia</td>
			<td><input type="text" name="usia"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td><input type="text" name="telp"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" class="btn btn-primary" name="simpan">Simpan</button></td>
		</tr>
		</table>
	</form>
</center>

</body>
</html>

<?php
include '../aset/footer.php';

?>