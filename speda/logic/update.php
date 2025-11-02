<?php 
// Manggil koneksi.php
include "koneksi.php";

$nama = $_POST['nama']; 
$nim = $_POST['nim'];
$nim_lama = $_POST['nim_lama'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Query Cara 2
$sql = "UPDATE Mahasiswa SET nama='$nama', nim='$nim', jenis_kelamin='$jenis_kelamin' WHERE nim='$nim_lama'";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header("Location: ../index.php");
}else{
    echo "Error : Gagal";
}