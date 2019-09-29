<?php
if(isset($_POST['simpan'])){

	include ('../koneksi.php');

	$username		= $_POST['username'];
	$password		= $_POST['password'];
	$nama			= $_POST['nama'];

	$query = "INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES (NULL, '$username', '$password', '$nama');";

	$hasil = mysqli_query($con, $query);

	if ($hasil == true) {
      echo "<script>window.alert('Tambah Data User Berhasil'); window.location.href='index.php'</script>";
    } else {
      echo "<script>window.alert('Tambah Data User Gagal!'); window.location.href='tambah.php'</script>";
    }
}else{	
	echo '<script>window.history.back()</script>';
}
?>