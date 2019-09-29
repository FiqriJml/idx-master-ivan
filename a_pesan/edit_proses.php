<?php
if(isset($_POST['save'])){
	
	include('../koneksi.php');

	$id 			= $_POST['id'];
	$username		= $_POST['username'];
	$password		= $_POST['password'];
	$nama			= $_POST['nama'];
	
	$update = mysqli_query($con,"update user SET id='$id', username='$username', password='$password', nama='$nama' WHERE id='$id'");

	if($update){
		echo "<script>window.alert('Data Berhasil Di Update'); window.location.href='index.php'</script>";
	}else{
		echo "<script>window.alert('Data Gagal Di Update'); window.location.href='edit.php'</script>";
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>