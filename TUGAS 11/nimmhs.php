<?php 
    include "koneksi.php";

    $nim    = $_GET['nim'];
    $nama   = $_GET['nama'];
    $jk     = $_GET['jk'];
    $agama  = $_GET['agama'];
    $cari   = $_GET['cari'];

    if(($nim=="asc")&&($jk=="all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            ORDER BY nim ASC
        ");
    }
    else if(($nim=="asc")&&($jk=="all")&&($agama<>"all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE agama = '$agama'
            ORDER BY nim ASC
        ");
    }
    else if(($nim=="asc")&&($jk<>"all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE jk = '$jk'
            ORDER BY nim ASC
        ");
    }
    else if(($nim=="asc")&&($jk<>"all")&&($agama<>"all")){
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE jk = '$jk' AND agama = '$agama' 
            ORDER BY nim ASC
        ");
    }
    else if(($nim=="desc")&&($jk=="all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            ORDER BY nim DESC
        ");
    }
    else if(($nim=="desc")&&($jk=="all")&&($agama<>"all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE agama = '$agama'
            ORDER BY nim DESC
        ");
    }
    else if(($nim=="desc")&&($jk<>"all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE jk = '$jk'
            ORDER BY nim DESC
        ");
    }
    else if(($nim=="desc")&&($jk<>"all")&&($agama<>"all")){
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE jk = '$jk' AND agama = '$agama' 
            ORDER BY nim DESC
        ");
    }
    else{
        echo "tidak ditemukan";
    }
?>
<?php 
    include "koneksi.php";
    $nomor = 1;
    while($data = mysqli_fetch_array($query)){
?>
    <tr>
        <td align="center"><?php echo $nomor++; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td align="center"><?php echo $data['jk']; ?></td>
        <td><?php echo $data['tmp_lahir'].", ".$data['tgl_lahir'];; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['agama']; ?></td>
        <td><?php echo $data['no_telp']; ?></td>
        <td><?php echo $data['fakultas']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
    </tr>
<?php } ?>