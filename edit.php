<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Edit Data</title>
</head>

<body>
<div class="container">
        <h3 class="pb-4">Edit Data</h3>
        <form action="update.php" method="POST">
            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa where id = '$id'");
            while($item = mysqli_fetch_array($data)) {
            ?>
            <div class="form-grup">
                <label for="input1">ID</label>
                <input type="text" class="form-control" id="input1" name="id" value="<?php echo $item['id']; ?>" readonly>
            </div>
            <div class="form-grup">
                <label for="input1">NIM</label>
                <input type="text" class="form-control" id="input1" name="nim" value="<?php echo $item['nim']; ?>">
            </div>
            <div class="form-grup">
                <label for="input1">Nama Lengkap</label>
                <input type="text" class="form-control" id="input1" name="nama" value="<?php echo $item['nama']; ?>">
            </div>
            <div class="form-grup">
                <label for="input1">Kelas</label>
                <input type="text" class="form-control" id="input1" name="kelas" value="<?php echo $item['kelas']; ?>">
            </div>
            <div class="form-grup">
                <label for="input1">Jenis Kelamin</label>
                <input type="text" class="form-control" id="input1" name="jk" value="<?php echo $item['jk']; ?>">
            </div>
            <div class="form-grup">
                <label for="input1">Alamat</label>
                <input type="text" class="form-control" id="input1" name="alamat" value="<?php echo $item['alamat']; ?>">
            </div>
            <?php
                }
            ?>
            <button class="btn btn-info mt-4" role="button" type="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>