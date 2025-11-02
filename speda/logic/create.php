<?php

include "koneksi.php";

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$jenis_kelamin = $_POST["jenis_kelamin"];

$sql = "INSERT INTO Mahasiswa (nim, nama, jenis_kelamin) VALUES (?, ?, ?)";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("sss", $nim, $nama, $jenis_kelamin);

try{
    if ($stmt->execute()) {
    header("Location: ../index.php");
} else {
    echo "Error : $stmt->error";
}
} catch(Exception $e) {
    echo $e->getMessage();
}


$stmt->close();
$koneksi->close();