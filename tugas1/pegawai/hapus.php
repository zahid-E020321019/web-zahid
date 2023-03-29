<?php

	$conn = mysqli_connect("localhost","root","","pegawai");

	$id_pegawai = $_GET['id'];

	$query = mysqli_query($conn,"DELETE FROM pegawai WHERE id_pegawai = '$id_pegawai'");


	if(mysqli_affected_rows($conn) > 0){
	echo "<script>
	alert('Data berhasil dihapus');
	document.location.href= 'data.php';
	</script>
	";	
}
	else{
	echo "<script>
	alert('Data gagal dihapus');
		document.location.href= 'data.php';
	</script>
	";	

}
 ?>