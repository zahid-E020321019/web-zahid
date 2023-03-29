<?php 
//	mengkoneksikan database
	$conn = mysqli_connect("localhost","root","","pegawai");
	$data = mysqli_query($conn, "SELECT * FROM pegawai");
//	mengambil data dari tabel siswa / query data siswa
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method="post" action="">
 	<h1 align="CENTER"><font color="black">DATA PEGAWAI</h1>
 	<a href="tambah.php" > Tambah Data </a>
 	<center><label>Pencarian : </label>
 	<input type="text" name="cari">
 	<button type="submit" name="mencari">Cari</button></center>
 </form>

  	<?php 
  		if (isset($_POST['mencari']))
  		 {
  			$cari = $_POST['cari'];
  			echo "Hasil Pencarian : $cari";
  			$data = mysqli_query($conn, "SELECT * FROM pegawai WHERE CONCAT(nama) like '%$cari%'");
  		}

  		else 
  		{
  			$data = mysqli_query($conn, "SELECT * FROM pegawai");
  		} 
  		
  	 ?>



<table border="1" cellpadding="10" align="center">
	<tr bgcolor="black" >
		<th><font color="white">Nomor</th>
		<th><font color="white">ID Pegawai</th>
		<th><font color="white">Nama</th>
		<th><font color="white">NIP</th>
		<th><font color="white">No Hp</th>
		<th><font color="white">Email</th>
		<th><font color="white">Aksi</th>	
	</tr>

	<?php $no=1; ?>
	<?php while ($row = mysqli_fetch_assoc($data)) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $row['id_pegawai'] ?></td>
		<td><?= $row['nama'] ?></td>
		<td><?= $row['nip']  ?></td>
		<td><?= $row['no_hp'] ?></td>
		<td><?= $row['email'] ?></td>
		<td>
			<a href="edit.php?id= <?= $row['id_pegawai'] ?>" />Edit</a>
			<a href="hapus.php?id= <?= $row['id_pegawai'] ?>" onclick=" return confirm('Yakin?');" />Hapus</a>
		</td>
	</tr>
<?php } ?>
</table>
</body>
</html