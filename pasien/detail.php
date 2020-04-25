<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_pasien = $_GET['id_pasien'];

$sql = "SELECT * FROM pasien ORDER BY nama";
$res = mysqli_query($koneksi,$sql);
$det = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Pasien</h2>
			<hr class="bg-light">
			<table><tr><th>
				<table class="table table-bordered">
					<tr>
						<td><strong>Nama</strong></td>
						<td><?= $det['nama'] ?></td>
					</tr>
					<tr>
						<td><strong>Alamat</strong></td>
						<td><?= $det['alamat'] ?></td>
					</tr>
					<tr>
						<td><strong>Telepon</strong></td>
						<td><?= $det['telp'] ?></td>
					</tr>
					<tr>
						<td><strong>Usia</strong></td>
						<td><?= $det['usia'] ?></td>
					</tr>
					<tr>
						<td><strong>Suhu</strong></td>
						<td><?= $det['suhu'] ?></td>
					</tr>
					
				</table>
				</th></tr></table>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>