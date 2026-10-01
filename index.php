<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <title>TiketWar</title>
</head>
<body>
    <?php
        $daftarKonser = [
            [
            "nama" => "Coldplay - Music of the Spheres",
            "tanggal" => "2026-03-15",
            "kategori" => "Festival",
            "harga" => 1500000
            ],
            [
            "nama" => "Dewa 19 Reunion Show",
            "tanggal" => "2026-04-02",
            "kategori" => "VIP",
            "harga" => 2500000
            ],
            [
            "nama" => "NCT Dream World Tour",
            "tanggal" => "2026-05-20",
            "kategori" => "Reguler",
            "harga" => 900000
            ],
        ];
        $hargaTiket = 1500000;
        $sisaTiket = 25;
        $sudahSoldOut = false;
        $kategoriTiket = "Festival"
    ?>

    <p>Konser terdekat: <?php echo $daftarKonser[0]["nama"]; ?></p>
    <p>Tanggal: <?php echo $daftarKonser[0]["tanggal"]; ?></p>
    <!-- <p>Konser: <?php //echo $namaKonser; ?></p> -->
    <p>Harga: Rp<?php echo $hargaTiket; ?></p>
    <p>Sisa tiket: <?php echo $sisaTiket; ?></p>
    <p>Kategori Tiket: <?php echo $kategoriTiket; ?></p>

   <?php
        $hargaAsli = $daftarKonser[0]["harga"];
        $persenDiskon = 20;
        $hargaSetelahDiskon = $hargaAsli - ($hargaAsli * $persenDiskon / 100);
        $tiketMasihAda = $daftarKonser[0]["harga"] > 0;
    ?>

    <p>Harga asli: Rp<?php echo $hargaAsli; ?></p>
    <p>Setelah diskon <?php echo $persenDiskon; ?>%: Rp<?php echo $hargaSetelahDiskon; ?></p>

    <?php
        $sisaTiket = $daftarKonser[0]["harga"] > 0 ? 15 : 0; // contoh sederhana
        if ($sisaTiket > 10) {
            $statusTiket = "Masih Banyak";
        } elseif ($sisaTiket > 0) {
            $statusTiket = "Sisa Dikit, Buruan!";
        } else {
            $statusTiket = "Sold Out";
        }

        $kategori = $daftarKonser[0]["kategori"];
        switch ($kategori) {
            case "Festival": $badge = "Festival Pass"; break;
            case "VIP": $badge = "VIP Access"; break;
            case "Reguler": $badge = "Reguler"; break;
            default: $badge = "Kategori tidak dikenali";
        }
    ?>

    <p>Status: <?php echo $statusTiket; ?></p>
    <p>Kategori: <?php echo $badge; ?></p>

    <!-- Latihan Debbuging: Tipe Data -->
    <?php
        $namaArtis = "NCT Dream";
        echo "Konser " . $namaArtis;
    ?>

    <br><br>
    <?php
        echo "Selamat datang di TiketWar - war tiket konser paling gercep!";
    ?>

    <!-- Latihan Debugging: Syntax Error -->
    <br><br>
    <?php
        echo "Tiket akan segera dibuka!";
    ?>

    <!-- Latihan Debugging: Penamaan Variabel -->
    <br><br>
    <?php
        $namaKonser = "Dewa 19 Reunion Show";
        echo "Konser pilihan: " . $namaKonser;
    ?>

    <!-- Latihan Debugging: Array -->
     <br><br>
    <?php
        $tiket = ["nama" => "VIP", "harga" => 500000];
        echo $tiket["harga"];
    ?>

    <!-- Latihan Debugging: Operator -->
    <br><br>
    <?php
        $jumlahTiket = "2";
        $totalHarga = $jumlahTiket + $jumlahTiket + $jumlahTiket;
        echo $totalHarga . " "; // menghasilkan 6, bukan "222"
        $kodePromo = "2" . "2" . "2";
        echo $kodePromo; // ternyata hasilnya "222"
    ?>
</body>
</html>