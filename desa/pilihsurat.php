<?php
include "koneksi.php";
include "navbar.php";

$keyword = "";

if(isset($_GET['cari'])){
$keyword = $_GET['keyword'];
$data = mysqli_query($conn,"SELECT * FROM penduduk 
WHERE nama LIKE '%$keyword%' OR nik LIKE '%$keyword%'");
}else{
$data = mysqli_query($conn,"SELECT * FROM penduduk");
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">

<h3>Pilih Surat</h3>

<form method="GET" class="mb-3">

<div class="input-group">

<input type="text" name="keyword" class="form-control" placeholder="Cari nama atau NIK">

<button class="btn btn-primary" name="cari">Cari</button>

</div>

</form>

<table class="table table-striped table-hover">

<thead class="table-dark">

<tr>
<th>NIK</th>
<th>Nama</th>
<th>Alamat</th>
<th>Surat</th>
</tr>

</thead>

<tbody>

<?php while($d = mysqli_fetch_array($data)){ ?>

<tr>

<td><?php echo $d['nik']; ?></td>

<td><?php echo $d['nama']; ?></td>

<td><?php echo $d['alamat']; ?></td>

<td>

<a href="surat_domisili.php?id=<?php echo $d['id']; ?>" class="btn btn-primary btn-sm">
Domisili
</a>

<a href="surat.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm">
Tidak Mampu
</a>


</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>