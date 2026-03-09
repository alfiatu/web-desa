<?php
include "koneksi.php";
include "navbar.php";

if(isset($_POST['submit'])){
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$tgl = $_POST['tgl'];

mysqli_query($conn,"INSERT INTO penduduk VALUES(NULL,'$nik','$nama','$alamat','$jk','$tgl')");

header("location:index.php");
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-7">

<div class="card shadow-lg border-0">

<div class="card-header bg-primary text-white text-center">

<h4>Tambah Data Penduduk</h4>
<p class="mb-0">Isi data penduduk dengan lengkap</p>

</div>

<div class="card-body p-4">

<form method="POST">

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">NIK</label>
<input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" required>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Nama</label>
<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
</div>

</div>

<div class="mb-3">
<label class="form-label">Alamat</label>
<textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
</div>

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">Jenis Kelamin</label>
<select name="jk" class="form-select">
<option value="">-- Pilih --</option>
<option>Laki-laki</option>
<option>Perempuan</option>
</select>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Tanggal Lahir</label>
<input type="date" name="tgl" class="form-control">
</div>

</div>

<div class="d-flex justify-content-between">

<a href="index.php" class="btn btn-secondary">
Kembali
</a>

<button name="submit" class="btn btn-success px-4">
Simpan Data
</button>

</div>

</form>

</div>

</div>

</div>

</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>