<?php
include '../koneksi.php';
$sql = "SELECT * FROM pasien ORDER BY nama";
		
$res = mysqli_query($koneksi,$sql);
$pasien = array();
while ($data = mysqli_fetch_assoc($res)) {
	$pasien[] = $data;
}
 // include '../pasien/index.php';
?>
<?php
include '../aset/header.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>PASIEN</title>
<!--   <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
  <div class="container">
  <div class="row mt-4">
    <div class="col-md"></div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h2 class="card-tittle"><i class="far fa-edit"></i> Data Pasien</h2>
    
    
  </div> 
  <div class="card-body">
    <table class="table table-dark" border="">
  <thead>
    <center>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Usia</th>
      <th scope="col">Suhu</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php
    $no = 1;
    foreach ($pasien as $p) {
  ?>

    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $p['nama'] ?></th>
      <td><?=$p ['usia'] ?></th>
      <td><?=$p ['suhu'] ?></th>
      <td>
         <a href="detail.php?id_pasien=<?= $p['id_pasien']; ?>" class="badge badge-success">Detail</a>
         <a href="hapus.php?id_pasien=<?= $p['id_pasien']; ?>" class="badge badge-danger">Hapus</a>
         <a href="edit.php?id_pasien=<?= $p['id_pasien']; ?>" class="badge badge-warning">Edit</a>
      </td>
    </tr>
    </center>
<?php 
  $no++;
}
?>
</table>
<center><h2><a href="tambah.php"> Tambah Pasien</a></h2><center>
  <center><h2><a href="../utama.php"> <<--Kembali</a></h2><center>
    
  </div>
</div>



<!--  <?php
include '../aset/footer.php';
?> -->

</body>
</html>