<?php
	include "koneksi.php";

	$nip = $_GET['nip'];
	$matkul = $_GET['matkul'];
	$cari = $_GET['cari'];

	if(($nip=="asc")&&($matkul=="all")){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_dosen ORDER BY nip ASC");
	}
	else if(($nip=="desc")&&($matkul=="all")){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_dosen ORDER BY nip DESC");
	}
	else if(($nip=="asc")&&($matkul<>"all")){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_dosen WHERE matkul = '$matkul'ORDER BY nip ASC");
	}
	else if(($nip=="desc")&&($matkul<>"all")){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_dosen WHERE matkul = '$matkul' ORDER BY nip DESC");
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