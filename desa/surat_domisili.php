<?php
include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM penduduk WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<h2 style="text-align:center;">SURAT KETERANGAN DOMISILI</h2>

<hr>

<p>Yang bertanda tangan di bawah ini Kepala Desa menerangkan bahwa:</p>

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
<td>Alamat</td>
<td>: <?php echo $d['alamat']; ?></td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>: <?php echo $d['jenis_kelamin']; ?></td>
</tr>

</table>

<p>Adalah benar penduduk desa kami.</p>

<br><br>

<p>Kepala Desa</p>

<br><br><br>

<p>________________</p>

<button onclick="window.print()">Cetak Surat</button>