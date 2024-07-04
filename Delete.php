<?php
// Koneksi ke database
include 'koneksi.php';
// Mendapatkan ID mahasiswa yang akan di hapus
$id = $_GET['id'];
// Query SQL untuk hapus data
$query = "DELETE FROM mahasiswa WHERE id='$id'";
if (mysqli_query($koneksi, $query)) {
    header("Location: tampilan_data.php");
}
?>