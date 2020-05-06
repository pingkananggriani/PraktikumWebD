<?php 
    include "koneksi.php";

    $nim    = $_GET['nim'];
    $nama   = $_GET['nama'];
    $jk     = $_GET['jk'];
    $agama  = $_GET['agama'];
    $cari   = $_GET['cari'];

    if(($jk=="all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE nama LIKE '%$cari%' OR nim LIKE '%$cari%'
        ");
    }
    else if(($jk=="all")&&($agama<>"all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE agama = '$agama' AND (nama LIKE '%$cari%' OR nim LIKE '%$cari%') 
        ");
    }
    else if(($jk<>"all")&&($agama=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE jk = '$jk' AND (nama LIKE '%$cari%' OR nim LIKE '%$cari%') 
        ");
    }
    else{
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                mahasiswa 
            WHERE jk = '$jk' AND agama = '$agama' AND (nama LIKE '%$cari%' OR nim LIKE '%$cari%') 
        ");
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