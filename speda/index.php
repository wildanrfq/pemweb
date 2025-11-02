<?php
    include "logic/koneksi.php";

    
    if (isset($_GET["search"]) && !empty($_GET["search"])) {
      $search = $_GET["search"];
      $sql = "SELECT * FROM Mahasiswa WHERE nama LIKE '%$search%' OR nim LIKE '%$search%'"; 
    } else {
      $sql = "SELECT * FROM Mahasiswa";
    }
    $result = mysqli_query($koneksi, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Speda</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-inverse">$
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Speda</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="tambah_mahasiswa.php">Tambah Mahasiswa</a></li>
      </ul>
    </div>
  </nav>

  <div class="daftar-mhs">
    <br>
    <div class="col-xs-10">
      <h2>Daftar Mahasiswa</h2>
      <form method="GET" action="index.php">
        <div class="input-group">
          <input class="form-control" name="search" type="text" placeholder="Cari Mahasiswa" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" required>
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Cari</button>
          </span>
        </div>
      </form>
      <br>
      <table class="table table-dark">
        <thead>
          <tr>
            <th>No</th>
            <th class="separator">NIM</th>
            <th>Nama</th>
            <th class="separator">Jenis Kelamin</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($data = mysqli_fetch_assoc($result)) : ?>
              <div id="delete_modal_<?= $data['nim']?>" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Hapus Data</h4>
                    </div>
                    <div class="modal-body">
                      <p>Apakah anda yakin ingin menghapus mahasiswa <b><?= $data['nama']?></b>?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-basic" data-dismiss="modal">Batal</button>
                      <a href="logic/delete.php?nim=<?= $data['nim']?>" class="btn btn-danger">Hapus</a>
                    </div>
                  </div>
                </div>
              </div>
            <tr>
                <td><?= $i++ ?></td>
                <td class="separator"><?= $data["nim"] ?></td>
                <td><?= $data["nama"] ?></td>
                <td class="separator"><?= $data["jenis_kelamin"] ?></td>
                <td>
                    <a class="btn btn-primary" href="update_mahasiswa.php?nim=<?=$data["nim"]?>&nama=<?=$data["nama"]?>&jenis_kelamin=<?=$data["jenis_kelamin"]?>">Update</a>
                    <a href="#" 
                      class="btn btn-danger delete-btn" 
                      data-nim="<?= $data["nim"] ?>"
                      data-toggle="modal" 
                      data-target="#delete_modal_<?= $data['nim']?>">
                      Delete
                    </a>
                </td>
            </tr>
            <?php endwhile ?>
          <?php else : ?>
          <tr>
              <td colspan="5" class="text-center">Tidak ada data</td>
          </tr>
          <?php endif ?>
        </tbody>
      </table>
    </div>
  </div>
  <script>
    document.querySelector("input[name='search']").addEventListener('input', function() {
      if (this.value === '') {
        this.form.submit();
      }
    })
  </script>
</body>

</html>