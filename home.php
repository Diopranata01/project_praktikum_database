<?php

    require 'function.php';

    $delete = $_GET;
    if ($delete != NULL) {
        deleteSiswa((int)$delete['id']);
    }

    $siswa = readSiswa();
    $guru = readGuru();
    $kelas = $guru[0]['kodeKelas'];
    $namaGuru = $guru[0]['nama'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <div class="header">
        <h1><?= "Kelas : $kelas"?></h1>
        <h2><?= "$namaGuru"?></h2>
        <a href="home.php">Home</a>  |  <a href="nilai.php">Nilai</a>
        <br><br>
    </div>
    <!-- Record data -->
    <table border="1" cellpadding="10" cellspacing="0" >
        <tr>
            <th>No Absen</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($siswa as $row) : ?>
        <tr>
            <td><?= $row["absen"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td>
                <a href="home.php?id=<?= $row['absen']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <br>
    <a href="createData.php">Input Siswa Baru</a>
    <br>
    <a href="index.php">Logout</a>
</body>
</html>