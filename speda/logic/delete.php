<?php

include "koneksi.php";

$nim = $_GET["nim"];

$sql = "DELETE FROM Mahasiswa WHERE nim='$nim'";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header("Location: ../index.php");
} else {
    echo "Error: $stmt->error";
}