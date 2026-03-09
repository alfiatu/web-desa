<?php
include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM penduduk WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Surat Tidak Mampu</title>

<style>

body{
font-family: Times New Roman;
margin:40px;
}

.judul{
text-align:center;
}

table{
margin-top:20px;
}

</style>

</head>

<body>

<div class="judul">

<h3>PEMERINTAH DESA MAJU JAYA</h3>
<p>Kecamatan Contoh, Kabupaten Contoh</p>

<hr>

<h4>SURAT KETERANGAN TIDAK MAMPU</h4>
<p>Nomor: 140 / SKTM / 2026</p>

</div>

<p>Yang bertanda tangan di bawah ini Kepala Desa Maju Jaya menerangkan bahwa:</p>

<table>

<tr>
<td>Nama</td>
<td>: <?php echo $d['nama']; ?></td>
</tr>

<tr>
<td>NIK</td>
<td>: <?php echo $d['nik']; ?></td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>: <?php echo $d['jenis_kelamin']; ?></td>
</tr>

<tr>
<td>Alamat</td>
<td>: <?php echo $d['alamat']; ?></td>
</tr>

</table>

<p>

Adalah benar warga desa kami yang tergolong dalam keluarga kurang mampu.
Surat keterangan ini dibuat untuk keperluan yang bersangkutan.

</p>

<br><br>

<p style="text-align:right;">
Maju Jaya, <?php echo date("d-m-Y"); ?>
</p>

<br><br><br>

<p style="text-align:right;">
Kepala Desa
</p>

<br><br><br>

<p style="text-align:right;">
____________________
</p>

<br><br>

<button onclick="window.print()">Cetak Surat</button>

</body>
</html>