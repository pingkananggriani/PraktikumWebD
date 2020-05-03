<?php
    require "function.php";
    if (isset($_POST["submit"])) {
        if (tambah($_POST) > 0) {
            echo "
                    <script>
                        alert('data berhasil ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
        } else {
            echo "
                <script>
                        alert('data tidak dapat ditambahkan!');
                        document.location.href = 'index.php';
                </script>
        
                ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>

<body>
    <div class="container cf">
        <div class="table-wrapper">
            <div class="table-title cf">
                <div class="title-row">
                    <h2>Tambah Data <b>Mahasiswa<b></h2>
                    <a style="text-decoration: none; color: #4dcfd6" href="index.php">Back to Home</a>
                </div>
            </div>

            <form action="" method="post" class="form">
                <div class="field">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" required>
                </div>
                <div class="field">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" required>
                </div>
                <div class="field">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="field">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id="jk">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="field">
                    <label for="tempat-lahir">Tempat Lahir</label>
                    <input type="text" name="tempat-lahir" id="tempat-lahir" required>
                </div>
                <div class="field">
                    <label for="tgl-lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl-lahir" id="tgl-lahir" required>
                </div>
                <div class="field">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" required>
                </div>
                <div class="field">
                    <label for="fakultas">Fakultas</label>
                    <select name="fakultas" id="fakultas" placeholder="fakultas">
                        <?php
                            global $conn;

                            $result = mysqli_query($conn, "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS
                                WHERE TABLE_NAME = 'mahasiswa' AND COLUMN_NAME = 'fakultas'");

                            $row = mysqli_fetch_array($result);
                            $enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE']) - 6))));

                            foreach ($enumList as $value) :
                        ?>
                            <option value="<?= $value ?>"><?= $value ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="field">
                    <input type="submit" class="btn-submit bg-green" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>