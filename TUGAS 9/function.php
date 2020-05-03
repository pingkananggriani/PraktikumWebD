<?php

	$conn = mysqli_connect("localhost", "root", "", "mahasiswa");

	function query($query)
	{
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data)
	{
		global $conn;
		$nim = htmlspecialchars($data["nim"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		$jk = htmlspecialchars($data["jk"]);
		$tempatLahir = htmlspecialchars($data["tempat-lahir"]);
		$tglLahir = htmlspecialchars($data["tgl-lahir"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$fakultas = htmlspecialchars($data["fakultas"]);

		// query insert data
		$query = "INSERT INTO mahasiswa(idmahasiswa,nim,nama,jenisKelamin,tempatLahir,tglLahir,alamat,email,fakultas)
					VALUES
				('', '$nim', '$nama', '$jk', '$tempatLahir', '$tglLahir', '$alamat', '$email', '$fakultas')
				";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function hapus($id)
	{
		global $conn;
		mysqli_query($conn, "DELETE FROM mahasiswa WHERE idmahasiswa = $id");

		return mysqli_affected_rows($conn);
	}

	function ubah($data)
	{
		global $conn; 

		$id = $data["idmahasiswa"];
		$nim = htmlspecialchars($data["nim"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		$jk = htmlspecialchars($data["jk"]);
		$tempatLahir = htmlspecialchars($data["tempat-lahir"]);
		$tglLahir = htmlspecialchars($data["tgl-lahir"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$fakultas = htmlspecialchars($data["fakultas"]);

		$query = "UPDATE mahasiswa SET
		nim = '$nim',
		nama = '$nama',
		email = '$email',
		jenisKelamin = '$jk',
		tempatLahir = '$tempatLahir',
		tglLahir = '$tglLahir',
		alamat = '$alamat',
		fakultas = '$fakultas'
		WHERE idmahasiswa = $id
		";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function cari($keyword)
	{
		$query = "SELECT * FROM mahasiswa WHERE
		nama LIKE '%$keyword%' OR
		nim LIKE '%$keyword%' OR
		email LIKE '%$keyword%' OR
		jurusan LIKE '%$keyword%' OR
		fakultas LIKE '%$keyword%'
		";
		return query($query);
	}
?>