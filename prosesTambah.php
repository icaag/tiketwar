<?php

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

$nama = $_POST["nama"];
$kategori = $_POST["kategori"];
$harga = $_POST["harga"];

$folderTujuan = "bukti_bayar/";
$namaFile = basename($_FILES["bukti"]["name"]);
$alamatFile = $folderTujuan . $namaFile;

if (move_uploaded_file($_FILES["bukti"]["tmp_name"], $alamatFile)) {

    $tiket = [
        "nama" => $nama,
        "kategori" => $kategori,
        "harga" => $harga,
        "bukti" => $alamatFile
    ];

    $_SESSION["daftarWar"][] = $tiket;

    header("Location: dashboard.php");
    exit;

} else {

    echo "Gagal upload bukti tiket.";
}