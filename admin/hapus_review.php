<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['status_admin'])) {
    header("location:../login_admin.php");
    exit;
}

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM review WHERE id_review='$id'");

header("location:data_review.php");
exit;
?>