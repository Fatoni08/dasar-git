<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Tambah Data</title>
</head>

<body>
    <div class="container">
        <h3 class="pb-4">Tambah Data</h3>
        <form action="insert.php" method="POST">
            <div class="form-grup">
                <label for="input1">NIM</label>
                <input type="text" class="form-control" id="input1" name="nim">
            </div>
            <div class="form-grup">
                <label for="input1">Nama Lengkap</label>
                <input type="text" class="form-control" id="input1" name="nama">
            </div>
            <div class="form-grup">
                <label for="input1">Kelas</label>
                <input type="text" class="form-control" id="input1" name="kelas">
            </div>
            <div class="form-grup">
                <label for="input1">Jenis Kelamin</label>
                <input type="text" class="form-control" id="input1" name="jk">
            </div>
            <div class="form-grup">
                <label for="input1">Alamat</label>
                <input type="text" class="form-control" id="input1" name="alamat">
            </div>
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