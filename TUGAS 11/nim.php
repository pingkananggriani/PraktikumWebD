<?php
	include "koneksi.php";

	$nim = $_GET['nim'];
	$jalur = $_GET['jalur'];
	$cari = $_GET['cari'];

	if(($nim=="asc")&&($jalur=="all")){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_mhs ORDER BY nim ASC");
	}
	else if(($nim=="desc")&&($jalur=="all")){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_mhs ORDER BY nim DESC");
	}
	else if(($nim=="asc")&&($jalur<>"all")){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_mhs WHERE jalur = '$jalur'ORDER BY nim ASC");
	}
	else if(($nim=="desc")&&($jalur<>"all")){
	    $query = mysqli_query($mysqli, "SELECT * FROM tb_mhs WHERE jalur = '$jalur' ORDER BY nim DESC");
	}
	?>
	<?php
	include "koneksi.php";
	$no = 1;
	while($data = mysqli_fetch_array($query)){
	?>
	<tr>
	    <td><?php echo $no++; ?></td>
	    <td><?php echo $data['nim']; ?></td>
	    <td><?php echo $data['nama']; ?></td>
	    <td><?php echo $data['jalur']; ?></td>
	    <td><?php echo $data['alamat']; ?></td>
	</tr>
<?php } ?>