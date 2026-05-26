<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login User</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .login-tengah-banget {
            width: 100%;
            min-height: 60vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 45px;
        }

        .kotak-login-baru {
            width: 360px;
            background: #ffffff;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        .kotak-login-baru h2 {
            text-align: center;
            color: #1b5e20;
            margin-bottom: 25px;
        }

        .kotak-login-baru label {
            display: block;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 6px;
        }

        .kotak-login-baru input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .kotak-login-baru button {
            width: 100%;
            padding: 12px;
            margin-top: 12px;
            background: #1b5e20;
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
        }

        .kotak-login-baru button:hover {
            background: #43a047;
        }

        .kotak-login-baru p {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>Sistem Informasi Tempat Wisata Jogja</h1>
</div>

<div class="menu">
    <a href="index.php">Beranda</a>
    <a href="wisata.php">Wisata</a>
    <a href="review.php">Review</a>
    <a href="login_user.php">Login User</a>
    <a href="register_user.php">Register</a>
    <a href="login_admin.php">Login Admin</a>
</div>

<div class="login-tengah-banget">
    <div class="kotak-login-baru">

        <h2>Login User</h2>

        <form method="POST" action="cek_login_user.php">
            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <p>
            Belum punya akun?
            <a href="register_user.php">Daftar di sini</a>
        </p>

    </div>
</div>

</body>
</html>