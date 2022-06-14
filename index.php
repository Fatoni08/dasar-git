<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Halaman Utama</title>
</head>

<body>
    <br><br><br>
    <div class="container">
        <h1 class="pb-4">Halaman Index</h1>
            <a href="tambah.php" class="btn btn-success mb-4" role="buttons">Tambah Data</a>
        <table class="table">
            <thead class="thead-dark">
                <th scope="col">ID</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Kelas</th>
                <th scope="col">Gender</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                    while($item = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $item['id']; ?></th>
                        <td><?php echo $item['nim']; ?></td>
                        <td><?php echo $item['nama']; ?></td>
                        <td><?php echo $item['kelas']; ?></td>
                        <td><?php echo $item['jk']; ?></td>
                        <td><?php echo $item['alamat']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $item['id']; ?>" class="btn btn-warning" role="button">Edit</a>&nbsp;
                            <a href="delete.php?id=<?php echo $item['id']; ?>" class="btn btn-danger" role="button">Delete</a>
                        </td>
                    </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>