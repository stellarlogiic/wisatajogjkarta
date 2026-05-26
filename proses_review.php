<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['id_user'])) {
    header("location:login_user.php?pesan=belum_login");
    exit;
}

$id_user = $_SESSION['id_user'];
$id_wisata = $_POST['id_wisata'];
$komentar = $_POST['komentar'];
$rating = $_POST['rating'];

$query = mysqli_query($koneksi, "INSERT INTO review 
(id_wisata, id_user, komentar, rating)
VALUES ('$id_wisata', '$id_user', '$komentar', '$rating')");

if ($query) {
    header("location:review.php");
} else {
    echo "Review gagal disimpan";
}
?>