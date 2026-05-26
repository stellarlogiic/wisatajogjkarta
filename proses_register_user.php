<?php
include 'koneksi.php';

$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$cek = mysqli_query($koneksi,
"SELECT * FROM user WHERE username='$username'");

if(mysqli_num_rows($cek) > 0){

    echo "
    <script>
        alert('Username sudah digunakan!');
        window.location='register_user.php';
    </script>
    ";

}else{

    mysqli_query($koneksi,
    "INSERT INTO user(nama_lengkap,email,username,password)
    VALUES('$nama_lengkap','$email','$username','$password')");

    echo "
    <script>
        alert('Registrasi berhasil!');
        window.location='login_user.php';
    </script>
    ";

}
?>