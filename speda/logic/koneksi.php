<?php

$host = "localhost";
$port = 3306;
$username = "root";
$database = "pw";

$koneksi = new mysqli($host, $username, "", $database, $port);

if ($koneksi) {
    echo "koneksi jalan";
} else {
    echo "koneksi mpuk";
    die;
}