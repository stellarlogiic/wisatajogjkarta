<?php
$koneksi = mysqli_connect("localhost", "root", "", "wisatajogjakarta");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>