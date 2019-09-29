<?php
if(isset($_POST['save'])){
	
	include('../koneksi.php');

	$id_register	= mysql_real_escape_string($_POST['id_register']);
	$nama_usaha		= mysql_real_escape_string($_POST['nama_usaha']);
	$nama_pemilik	= mysql_real_escape_string($_POST['nama_pemilik']);
	$no_ktp			= mysql_real_escape_string($_POST['no_ktp']);
	$kategori_usaha	= mysql_real_escape_string($_POST['kategori_usaha']);
	$email			= mysql_real_escape_string($_POST['email']);
	$no_hp			= mysql_real_escape_string($_POST['no_hp']);
	$alamat			= mysql_real_escape_string($_POST['alamat']);
	$desa			= mysql_real_escape_string($_POST['desa']);
	$kecamatan		= mysql_real_escape_string($_POST['kecamatan']);
	$provinsi		= mysql_real_escape_string($_POST['provinsi']);
	$username		= mysql_real_escape_string($_POST['username']);
	$password		= mysql_real_escape_string($_POST['password']);
	
	$update = mysqli_query($con,"update register SET id_register='$id_register', nama_usaha='$nama_usaha', nama_pemilik='$nama_pemilik', no_ktp='$no_ktp', kategori_usaha='$kategori_usaha', email='$email', no_hp='$no_hp', alamat='$alamat', desa='$desa', kecamatan='$kecamatan', provinsi='$provinsi', username='$username', password='$password' WHERE id_register='$id_register'");

	if($update){
		echo "<script>window.alert('Data Berhasil Di Update'); window.location.href='index.php'</script>";
	}else{
		echo "<script>window.alert('Data Gagal Di Update'); window.location.href='index.php'</script>";
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>