<?php
include 'koneksi.php';
extract($_POST);

mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim', nama='$nama', kelas='$kelas', jk='$jk', alamat='$alamat'");
header("Location: index.php");
?>