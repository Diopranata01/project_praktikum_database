<?php

    require 'function.php';
    $guru = query("SELECT * FROM guru g JOIN login l ON g.NIP = l.NIP");
    $kelas = $guru[0]['kodeKelas'];
    $namaGuru = $guru[0]['nama'];
    if(isset($_POST["submit"])){
        if (createSiswa($_POST) == 1) {
            echo "
                <script>
                    alert('Create Berhasil');
                    document.location.href = 'home.php';
                </script>
            ";
        }
    }
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
        <h3>Create Siswa</h3>
    </div>
    <!-- Record data -->
    <ul>
        <form action="" method="POST">
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="absen">Absen : </label>
                <input type="text" name="absen" id="absen" required>
            </li>
            <li>
                <label for="kodeKelas">Kelas : </label>
                <input type="text" name="kodeKelas" id="kodeKelas" required>
            </li>
            <li>
                <button type="submit" name="submit">Create</button>
            </li>
        </form>
    </ul>
</body>
</html>