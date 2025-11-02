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
        <div class="col-xs-10">
            <h2>Update Mahasiswa</h2>
            <br>
            <form action="logic/update.php" method="post">
                <input type="hidden" name="nim_lama" value="<?= $_GET['nim'] ?>">
                <p>NIM</p>
                <input name="nim" value="<?= $_GET['nim']?>" type="text" class="col-xs-10">
                <br><br>
                <p>Nama</p>
                <input name="nama" value="<?= $_GET['nama']?>"type="text" class="col-xs-10">
                <br><br>
                <p>Jenis Kelamin</p>
                <div class="custom-control custom-radio">
                    <input name="jenis_kelamin" value="Laki-laki" type="radio" class="custom-control-input" 
                    <?= ($_GET['jenis_kelamin'] == 'Laki-laki') ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="customCheckDisabled">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio">
                    <input name="jenis_kelamin" value="Perempuan" type="radio" class="custom-control-input"
                    <?= ($_GET['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="customCheckDisabled">Perempuan</label>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</body>

</html>