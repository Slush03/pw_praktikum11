<?php
$koneksi = mysqli_connect("localhost", "root", "", "pw11_2");

// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
