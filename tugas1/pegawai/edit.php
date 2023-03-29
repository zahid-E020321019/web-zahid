<?php
// koneksi database
	$conn = mysqli_connect("localhost","root","","pegawai");
//ambil data berupa id
	$id_pegawai = $_GET['id'];

//menampilkan seluruh data tabel siswa berdasarkna id_siswa
	$data = mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai=$id_pegawai");

	while($pegawai = mysqli_fetch_assoc($data)) {
		$id_pegawai  = $pegawai['id_pegawai']; 
		$nama 		 = $pegawai['nama'];
		$nip 		 = $pegawai['nip'];
		$no_hp 		 = $pegawai['no_hp'];
		$email		 = $pegawai['email'];
	}
 //jika tombol simpan ditekan
	if(isset($_POST['simpan']) ) {
		$nama 	= $_POST['nama'];
		$nip 	= htmlspecialchars($_POST['nip']);
		$nip 	= $_POST['no_hp'];
		$no_hp  = $_POST['email'];
		
		mysqli_query($conn, "UPDATE pegawai SET  nama='$nama' ,nip='$nip', no_hp='$no_hp', email='$email'");

		
		if(mysqli_affected_rows($conn) > 0) {
			echo "<script>
			alert('Data Berhasil Diedit');
			document.location.href = 'data.php';
			</script>
			";
		}

		else {
			echo "<script>
			alert('Data Gagal Diedit');
			document.location.href = 'data.php';
			</script>
			";
		}	
	}

    ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit Data</title>
 </head>
 <body>

 <form method="POST" action="" enctype="multipart/form-data">
		<table cellpadding="10">
			<tr>
			<td><label>Nama: </label></td>
			<td><input type="text" name="nama" value="<?php echo $nama;  ?>" placeholder="Masukkan nama"></td>
		</tr>
	<tr>
		<td><label>NIP :</label></td>
		<td><input type="text" name="nip" value="<?php echo $nip; ?>" placeholder="Masukkan nip"></td>
	</tr>

	<tr>
		<td><label>No  Hp :</label></td>
		<td><input type="text" name="no_hp" value="<?php echo $no_hp; ?>" placeholder="Masukkan nip"></td>
	</tr>

	<tr>
		<td><label>Email :</label></td>
		<td><input type="text" name="email" value="<?php echo $email; ?>" placeholder="Masukkan nip
			"></td>
	</tr>
	
	<tr>
		<td>
			<button type="submit" name="simpan">Simpan</button>
			<button type="reset"> Batal</button>
		</td>
	</TR>
	</table>
	</form>
