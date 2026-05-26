<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $data = mysqli_fetch_array($query);

    $_SESSION['id_admin'] = $data['id_admin'];
    $_SESSION['admin'] = $data['username'];
    $_SESSION['status_admin'] = "login";

    header("location:admin/dashboard.php");
} else {
    header("location:login_admin.php?pesan=gagal");
}
?>