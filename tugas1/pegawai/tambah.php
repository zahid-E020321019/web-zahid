<?php
	$conn = mysqli_connect("localhost","root","","pegawai");

//	jika tombol simpan ditekan
	if ( isset($_POST['simpan']) )
	{

		//MENGAMBIL Data dari form dan dimasukkan ke variabel baru
		$nama 	= $_POST['nama'];
		$nip 	= $_POST['nip'];
		$no_hp  = $_POST['no_hp'];
		$email  = $_POST['email'];
	
		//menambah data/query
		mysqli_query($conn, "INSERT INTO pegawai VALUES ('', '$nama', '$nip', '$no_hp', '$email')");

		//jika QUERY TAMBAH data berhasil
		if (mysqli_affected_rows($conn) > 0) {
			echo "<script>
				alert('data berhasil ditambahkan');
				document.location.href='data.php';
				</script>
			";
		}
		else {
			echo "<script>
			alert('data gagal ditambahkan');
			</script>
			";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>


	<form method="POST" action="" enctype="multipart/form-data">
		<table  cellpadding="5" cellspacing="5" align="center">
			<CENTER><h1><font color="black">TAMBAH DATA PEGAWAI</h1></CENTER>

	<tr>
		<td><label><font color="black">Nama:</label></td>
		<td><input type="text" name="nama" placeholder="Masukkan nama"></td>
	</tr>

	<tr>
		<td><label><font color="black">NIP:</label></td>
		<td><input type="text" name="nip" placeholder="Masukkan nip"></td>
	</tr>
	
	<tr>
		<td><label><font color="black">No Hp:</label></td>
		<td><input type="text" name="no_hp" placeholder="Masukkan no hp"></td>
	</tr>

	<tr>
		<td><label><font color="black">Email:</label></td>
		<td><input type="text" name="email" placeholder="Masukkan email"></td>
	</tr>

	<tr>
		<td>	
			<button type="submit" name="simpan">Simpan</button>
			<button type="reset"> Batal</button>
		</td>
	</TR>
	
	
	</table>
	</form>
</body>
</html>
	