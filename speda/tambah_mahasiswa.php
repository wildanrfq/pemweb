<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Speda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Speda</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="#">Tambah Mahasiswa</a></li>
            </ul>
        </div>
    </nav>

    <div class="daftar-mhs">
        <br>
        <div id="delete_modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Hapus Data</h4>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus mahasiswa <span id="student-name"></span>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-basic" data-dismiss="modal">Batal</button>
                        <button type="button" id="confirm-delete" class="btn btn-danger"
                            data-dismiss="modal">Hapus</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-10">
            <h2>Tambah Mahasiswa</h2>
            <br>
            <form action="logic/create.php" method="post">
                <p>NIM</p>
                <input name="nim" type="text" placeholder="Masukkan NIM mahasiswa" class="col-xs-10">
                <br><br>
                <p>Nama</p>
                <input name="nama" type="text" placeholder="Masukkan nama mahasiswa" class="col-xs-10">
                <br><br>
                <p>Jenis Kelamin</p>
                <div class="custom-control custom-radio">
                    <input name="jenis_kelamin" value="Laki-laki" type="radio" class="custom-control-input">
                    <label class="custom-control-label" for="customCheckDisabled">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio">
                    <input name="jenis_kelamin" value="Perempuan" type="radio" id="radio3" name="radioDisabled" id="customRadioDisabled"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioDisabled">Perempuan</label>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</body>

</html>