<?php
	include "koneksi.php";

	$nip = $_GET['nip'];
	$matkul = $_GET['matkul'];
	$cari = $_GET['cari'];

	if($matkul=="all"){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_dosen WHERE nama LIKE '%$cari%' OR nip like '%$cari%'");
	}
	else if($matkul<>"all"){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_dosen WHERE matkul = '$matkul' AND (nama LIKE '%$cari%' OR nip like '%$cari%')");
	}
	?>
	<?php
	include "koneksi.php";
	$no = 1;
	while($data = mysqli_fetch_array($query)){
	?>
	<tr>
	    <td><?php echo $no++; ?></td>
	    <td><?php echo $data['nip']; ?></td>
	    <td><?php echo $data['nama']; ?></td>
	    <td><?php echo $data['matkul']; ?></td>
	    <td><?php echo $data['alamat']; ?></td>
	</tr>
<?php } ?>