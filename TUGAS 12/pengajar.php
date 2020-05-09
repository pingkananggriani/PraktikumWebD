<?php 
	require 'function.php';

	if( !isset($_SESSION["login"])) {
	    header("Location: login.php");
	    exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Website Universitas Udayana</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
<div class="menu">
        <div class="tag">
            <p style="font-size: small;"><b>UNIVERSITAS UDAYANA</b><br>
            <i>Unggul, Mandiri, Berbudaya</i></p>
        </div>
        <table cellpadding="20px" class="tableMenu">
            <tr>
                <td><a href="index.php">HOME</a></td>
                <td><a href="about.php">TENTANG</a></td>
                <td><a href="pengajar.php">PENGAJAR</a></td>
                <td><a href="kontak.php">KONTAK</a></td>
            </tr>
        </table>
    </div>
    <div class="kiri">
        <section class="logo">
            <img class="logounud" src="gambar/logo.png" alt="unud" height="150px" width="120"/>
        </section>
        <section class="isikiri">
            <h3>Artikel Populer</h3>
        </section>
        <section class="isi-kiri">
            <a href="#">
                <h4>Desain Website</h4>
            </a>
        </section>
        <section class="isi-kiri">
            <a href="#">
                <h4>HTML</h4>
            </a>
        </section>
        <section class="isi-kiri">
            <a href="#">
                <h4>CSS</h4>
            </a>
        </section>
        <section class="isi-kiri">
            <a href="logout.php">
                <h4>Logout</h4>
            </a>
        </section>
    </div>
    <div class="kanan">
        <section class="content">
            <div class="gambar">
            <div class="kotakicon" style="float: left; margin-left: 120px;">
                <img src="gambar/icon.png" class="kotakicon">
            </div>
            <div class="kotakicon" style="float: left; margin-left: 150px;">
                <img src="gambar/icon.png" class="kotakicon">
            </div>
            <div class="kotakicon" style="float: left; margin-left: 180px;">
                <img src="gambar/icon.png" class="kotakicon">
            </div>
        </div>
        <div class="deskripsi" style="float: left; margin-left: 60px;">
            <center>
                Pingkan Anggriani
                <br>1234567891011121314   
                <br>pingkan@cs.unud.ac.id
                <br>Jl.Lurus Aja No.1001
            </center>
        </div>
        <div class="deskripsi" style="float: left; margin-left: 50px;">
            <center>
                Rose Powder
                <br>12345678915161718   
                <br>rspowder@cs.unud.ac.id
                <br>Jl.Beras No.404
            </center>
        </div>
        <div class="deskripsi" style="float: left; margin-left: 60px;">
            <center>
                Putra Anggara 
                <br>12345678987654299   
                <br>putra@cs.unud.ac.id
                <br>Jl.Panjang No.333
            </center>
        </div>
    </div>
    <div class="next">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
    </div>
        </section>
    </div>
    <div class="footer">
        <h2>UNIVERSITAS UDAYANA</h1>
            <h4>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</h4>
            <h4>Phone Number: +62 (361) 701954, 704845</h4>
            <h4>Fax: +62 (361) 701907</h4>
            <h4>Email: info@unud.ac.id</h4>
    </div>
</body>
</html>