<?php
if(isset($_POST['simpan'])){

	include ('../koneksi.php');

	$nama			= $_POST['nama'];
	$mitra			= $_POST['mitra'];
	$tanggal		= $_POST['tanggal'];
	$lainya			= $_POST['lainya'];

	$query = "INSERT INTO `info_statusmitra` (`id_statusmitra`,`nama`,`mitra`,`tanggal`,`lainya`) VALUES (NULL,'$nama','$mitra','$tanggal','$lainya');";

	$hasil = mysqli_query($con, $query);

	if ($hasil == true) {
      echo "<script>window.alert('Tambah Data Berhasil'); window.location.href='index.php'</script>";
    } else {
      echo "<script>window.alert('Tambah Data Gagal!'); window.location.href='tambah.php'</script>";
    }
}else{	
	echo '<script>window.history.back()</script>';
}
?>