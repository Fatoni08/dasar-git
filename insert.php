<?php
include 'koneksi.php';
extract($_POST);

mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, kelas, jk, alamat) VALUE ('$nim', '$nama', '$kelas', '$jk', '$alamat')");
header("Location: index.php");
?>