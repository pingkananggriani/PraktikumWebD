<?php
require "function.php";

$id = $_GET["id"];
$dataMhs = query("SELECT * FROM mahasiswa WHERE idmahasiswa = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>

<body>
    <div class="container cf">
        <div class="table-wrapper">
            <div class="table-title cf">
                <div class="title-row">
                    <h2>Data <b>Mahasiswa<b></h2>
                    <a style="text-decoration: none; color: #4dcfd6 " href="index.php">Back to Home</a>
                </div>
            </div>
            <div>
                <div class="form">
                    <div class="field">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" id="nim" readonly value="<?= $dataMhs["nim"]; ?>">
                    </div>
                    <div class="field">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" readonly value="<?= $dataMhs["nama"]; ?> ">
                    </div>
                    <div class="field">
                        <label for="nim">E-mail</label>
                        <input type="text" name="email" id="email" readonly value="<?= $dataMhs["email"]; ?> ">
                    </div>
                    <div class="field">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" name="jk" id="jk" readonly value="<?= $dataMhs["jenisKelamin"]; ?> ">
                    </div>
                    <div class="field">
                        <label for="tempat-lahir">Tempat Lahir</label>
                        <input type="text" name="tempat-lahir" id="tempat-lahir" readonly value="<?= $dataMhs["tempatLahir"]; ?> ">
                    </div>
                    <div class="field">
                        <label for="tgl-lahir">Tanggal Lahir</label>
                        <input type="text" name="tgl-lahir" id="tgl-lahir" readonly value="<?= $dataMhs["tglLahir"]; ?>">
                    </div>
                    <div class="field">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" readonly value="<?= $dataMhs["alamat"]; ?> ">
                    </div>
                    <div class="field">
                        <label for="fakultas">Fakultas</label>
                        <input type="text" name="fakultas" id="fakultas" readonly value="<?= $dataMhs["fakultas"]; ?> ">
                    </div>
                </div>
            </div>
        </div>
</body>
</html>