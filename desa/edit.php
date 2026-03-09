<?php
include "koneksi.php";
include "navbar.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM penduduk WHERE id='$id'");
$d = mysqli_fetch_array($data);

if(isset($_POST['submit'])){

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];

mysqli_query($conn,"UPDATE penduduk SET 
nik='$nik',
nama='$nama',
alamat='$alamat',
jenis_kelamin='$jk'
WHERE id='$id'");

header("location:index.php");
}
?>

<form method="POST">

<input type="text" name="nik" value="<?php echo $d['nik']; ?>">

<input type="text" name="nama" value="<?php echo $d['nama']; ?>">

<textarea name="alamat"><?php echo $d['alamat']; ?></textarea>

<select name="jk">
<option>Laki-laki</option>
<option>Perempuan</option>
</select>

<button name="submit">Update</button>

</form>