<?php
include "koneksi.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

$sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', no_hp='$no_hp', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', alamat='$alamat' WHERE id='$id'";

if (mysqli_query($koneksi, $sql)) {
    // Redirect to the display page
    header("Location: tampilan_data.php");
} else {
    // Handle error if needed, possibly redirect to an error page
    echo "Error updating record: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
