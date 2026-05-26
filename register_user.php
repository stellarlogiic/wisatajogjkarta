<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>Register User</h1>
</div>

<div class="menu">
    <a href="index.php">Beranda</a>
    <a href="wisata.php">Wisata</a>
    <a href="review.php">Review</a>
    <a href="login_user.php">Login User</a>
    <a href="register_user.php">Register</a>
    <a href="login_admin.php">Login Admin</a>
</div>

<div class="auth-wrapper">
    <div class="card auth-card">
        <h3>Form Registrasi</h3>

        <form method="POST" action="proses_register_user.php">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Daftar</button>
        </form>

        <p>Sudah punya akun? <a href="login_user.php">Login di sini</a></p>
    </div>
</div>

</body>
</html>