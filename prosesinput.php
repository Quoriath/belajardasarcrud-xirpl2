<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO tbsiswa (nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";
    $result = mysqli_query($koneksi, $sql);

    mysqli_close($koneksi);

    header("Location: view-data.php");
    exit();
}
?>
