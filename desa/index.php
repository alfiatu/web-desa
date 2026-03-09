<?php
include "koneksi.php";
include "navbar.php";
$data = mysqli_query($conn,"SELECT * FROM penduduk");
?>

<!DOCTYPE html>
<html>
<head>
<title>Sistem Desa</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<<div class="container mt-4">

<h3 class="mb-3">Data Penduduk</h3>

<table class="table table-striped table-hover shadow">

<thead class="table-dark">

<tr>
<th>NIK</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
<th>Aksi</th>
</tr>

</thead>

<tbody>

<?php while($d = mysqli_fetch_array($data)){ ?>

<tr>

<td><?php echo $d['nik']; ?></td>

<td>
<a href="pilihsurat.php?id=<?php echo $d['id']; ?>">
<?php echo $d['nama']; ?>
</a>
</td>

<td><?php echo $d['alamat']; ?></td>

<td><?php echo $d['jenis_kelamin']; ?></td>

<td>

<a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

<a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>