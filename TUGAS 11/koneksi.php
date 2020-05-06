<?php 
    $server   = "localhost";
    $username = "root";
    $password = "";
    $database = "kampus";
 
    $koneksi = mysqli_connect($server, $username, $password, $database);
 
    if (!$koneksi)
    {
        echo "<h1>Koneksi gagal</h1>";
    }
 
?>