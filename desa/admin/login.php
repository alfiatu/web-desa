<?php
session_start();
include "../koneksi.php";

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){

$_SESSION['username'] = $username;
header("location:dashboard.php");

}else{

echo "<script>alert('Login gagal');</script>";

}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background: linear-gradient(135deg,#74ebd5,#9face6);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
}

.card{
border-radius:15px;
}

</style>

</head>

<body>

<div class="col-md-4">

<div class="card shadow-lg">

<div class="card-header bg-primary text-white text-center">
<h4>Login Admin Desa</h4>
</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">
<label class="form-label">Username</label>
<input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
</div>

<div class="mb-3">
<label class="form-label">Password</label>
<input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
</div>

<div class="d-grid">
<button name="login" class="btn btn-success">Login</button>
</div>

</form>

</div>

</div>

</div>

</body>
</html>