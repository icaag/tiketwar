<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <title>TiketWar</title>
</head>
<body>
    <?php
        $namaKonser = "Coldplay - Music of the Spheres";
        $hargaTiket = 1500000;
        $sisaTiket = 25;
        $sudahSoldOut = false;
    ?>

    <p>Konser: <?php echo $namaKonser; ?></p>
    <p>Harga: Rp<?php echo $hargaTiket; ?></p>
    <p>Sisa tiket: <?php echo $sisaTiket; ?></p>

    <?php
        $namaArtis = "NCT Dream";
        echo "Konser " . $namaArtis;
    ?>

    <br><br>
    <?php
        echo "Selamat datang di TiketWar - war tiket konser paling gercep!";
    ?>

    <br><br>
    <?php
        echo "Tiket akan segera dibuka!";
    ?>
</body>
</html>