<?php
include "koneksi.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// Correct the SQL query to match the table schema
$sql = "INSERT INTO mahasiswa (id, nama, no_hp, jenis_kelamin, jurusan, alamat) 
VALUES ('$id', '$nama', '$no_hp', '$jenis_kelamin', '$jurusan', '$alamat')";

if (mysqli_query($koneksi, $sql)) {
    // Redirect to the display page
    header("Location: tampilan_data.php");
} else {
    // Redirect to the form if there's an error
    header("Location: form_tambah.php");
}

mysqli_close($koneksi);
?>
