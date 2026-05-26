<?php
session_start();
include 'koneksi.php';

$id_review = $_POST['id_review'];
$komentar = $_POST['komentar'];
$rating = $_POST['rating'];

$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM review WHERE id_review='$id_review'"));

if ($data['id_user'] != $_SESSION['id_user']) {
    echo "Akses ditolak!";
    exit;
}

mysqli_query($koneksi, "UPDATE review SET
komentar='$komentar',
rating='$rating'
WHERE id_review='$id_review'");

header("location:review.php");
?>