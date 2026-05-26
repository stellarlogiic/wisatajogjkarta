<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user 
WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $data = mysqli_fetch_array($query);

    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['status_user'] = "login";

    header("Location: index.php");
    exit;
} else {
    echo "<script>
        alert('Username atau password salah!');
        window.location='login_user.php';
    </script>";
}
?>