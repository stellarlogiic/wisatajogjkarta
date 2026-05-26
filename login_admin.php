<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>Login Admin</h1>
</div>

<div class="menu">
    <a href="index.php">Beranda</a>
    <a href="wisata.php">Wisata</a>
    <a href="review.php">Review</a>
</div>

<div class="container">
    <form method="POST" action="cek_login_admin.php">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>