<!DOCTYPE html>
<html>
<head>
	<title>PAGINATION</title>
	<style>
    	body {
			background-color: #999999;
			margin: 0;
			padding: 0;
		}
		h1 {
			font-family: Poppins;
			color: rgba(255,255,255,1);
			font-style: bold;
			font-size: 38px;
			text-align: center;
		}
		h2 {
			font-family: Poppins;
			color: rgba(255,255,255,1);
			font-style: bold;
			text-align: center;
			font-size: 20px;
			margin-top: 1px;
		}
		a {
			font-family: Poppins;
			font-size: 20px;
			color: rgba(255,255,255,1);
		}
		.header {
			height:50px;
			background-color:rgba(2,2,2,0.8);
			padding-top:10px;
			padding-right: 20px;
			text-align: right;
		}
		.isi {
			height:552px;
		}
		.formkot {
			width:75%;
			padding:20px;
			margin-left:150px;
			border-radius: 20px;
			background-color:#ffcccc;
		}
		#kotak {
			opacity: 1;
			color: rgba(255,255,255,1);
			padding: 8px;
			margin: 8px;
		}
		.tabel{
			width: 100%;
		}
		.tabel th {
			background-color: #009999;
			color: rgba(255,255,255,1);
			padding: 1em;
			text-align: left;
			text-transform: uppercase;
			font-family: Poppins;
			font-size: 10px;
		}
		.tabel td {
			border-bottom: 1px solid #ddd;
			padding: 1em;
			font-family: Poppins;
			font-size: 10px;
		}
		.tabel tr:nth-child(even) {
			background-color: #CCFFFF;
			font-family: Poppins;
			font-size: 10px;
		}
		.tabel tr:nth-child(odd) {
			background-color: #CCFFFF;
			font-family: Poppins;
			font-size: 10px;
		}
		.pagination {
  			display: inline-block;
  			margin-left: 42%;
		}
		.pagination a {
			margin-top: 10px;
			font-size: 12px;
			background-color: #ffff;
  			color: black;
  			float: left;
  			padding: 8px 16px;
  			text-decoration: none;
  			font-weight: bold;
		}
		.pagination a.active {
  			background-color: #f2672e;
  			color: white;
		}
		.pagination a:hover:not(.active) {background-color: #f2672e;}
	</style>
</head>
<body>
<div class="isi">
<h1>PAGINATION</h1>
<div class="formkot">
<?php

$koneksi = mysqli_connect("localhost","root","","simak") or die(mysqli_error());

	$halaman = 4;
  	$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  	$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  	$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
  	$total = mysqli_num_rows($result);
  	$pages = ceil($total/$halaman);  
  	$sql = "SELECT * FROM mahasiswa LIMIT $mulai, $halaman";
	$query = mysqli_query($koneksi, $sql);          
	$no =$mulai+1;
	echo "<table class='tabel'>";
	echo "<tr>
			<th>NO</th>
			<th>ID</th>
			<th>NIM</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th>ALAMAT</th>
			<th>E-MAIL</th>
			<th>FAKULTAS</th>
		  </tr>";
	
	while($data = mysqli_fetch_array($query)){
		?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data['id_mhs']; ?></td>
				<td><?php echo $data['nim']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jeniskelamin']; ?></td>
				<td><?php echo $data['tempatlahir']; ?></td>
				<td><?php echo $data['tanggallahir']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><?php echo $data['fakultas']; ?></td>
			</tr>
		<?php
		$no++;
	}
	echo "</table>";

?><div class="pagination">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 
  <?php } ?>
 
</div></div></div><br><br>
</body>
</html>