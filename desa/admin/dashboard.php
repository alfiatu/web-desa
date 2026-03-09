<?php
session_start();
include "../koneksi.php";
include "../navbar.php";

$query = mysqli_query($conn, "SELECT * FROM penduduk");
$total_penduduk = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard Admin</title>
<link rel="stylesheet" href="../css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="sidebar">

<h2 class="text-center">Admin Desa</h2>

</div>

<div class="container mt-4">

<h3 class="mb-4">Dashboard Desa</h3>

<div class="row">

<div class="col-md-4">
<div class="card text-white bg-primary shadow">
<div class="card-body">
<h5>Total Penduduk</h5>
<h2><?php echo $total_penduduk; ?></h2>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-white bg-success shadow">
<div class="card-body">
<h5>Laki-laki</h5>
<h2><?php echo $laki = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM penduduk WHERE jenis_kelamin='Laki-laki'"));; ?></h2>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-white bg-danger shadow">
<div class="card-body">
<h5>Perempuan</h5>
<h2><?php echo $perempuan = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM penduduk WHERE jenis_kelamin='Perempuan'"));; ?></h2>
</div>
</div>
</div>

</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>