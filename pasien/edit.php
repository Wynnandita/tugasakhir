<?php 

include '../koneksi.php';
include '../aset/header.php';
$id_pasien = $_GET['id_pasien'];
$query = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien=$id_pasien");
$pasien = mysqli_fetch_assoc($query);

?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<center>
				<div class="card" style="width: 100%">
					<div class="card-header" style="width: 100%">
						<h2 class="card-tittle"><i class="fas fas fa-book"></i> Edit Data Pasien</h2>
					</div>
					<div class="card-body"></div>
					<form action="edit-proses.php" method="post">
						<table class="table">
							<input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien']; ?>">
							<tr>
								<td>Nama</td>
								<td><input style="width: 100%" type="text" name="nama" value="<?= $pasien['nama']; ?>" required></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><input style="width: 100%" type="text" name="alamat" value="<?= $pasien['alamat']; ?>" required></td>
							</tr>
							<tr>
								<td>Telepon</td>
								<td><input style="width: 100%" type="number" name="telp" value="<?= $pasien['telp']; ?>" required></td>
							</tr>
							<tr>
								<td>Usia</td>
								<td><input style="width: 100%" type="number" name="usia" value="<?= $pasien['usia']; ?>" required></td>
							</tr>
							<tr>
								<td>Suhu</td>
								<td><input style="width: 100%" type="text" name="suhu" value="<?= $pasien['suhu']; ?>" required></td>
							</tr>
							<tr>
								<th></th>
								<th><button type="submit" class="btn btn-primary" name="simpan" style="width: 100%; height: 70px">Edit
								</button></th>
							</tr>
						</table>
					</form>
				</div>
			</center>
		</div>
	</div>
</div>