<?php
$koneksi = mysqli_connect("127.0.0.1", "root", "timi", "dbsiswa");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
