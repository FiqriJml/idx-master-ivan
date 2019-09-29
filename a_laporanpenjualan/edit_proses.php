<?php
if(isset($_POST['save'])){
	
	include('../koneksi.php');

	$id_laporan 	= $_POST['id_laporan'];
	$nama			= $_POST['nama'];
	$tanggal		= $_POST['tanggal'];
	$jenis_produk	= $_POST['jenis_produk'];
	$nama_produk	= $_POST['nama_produk'];
	$unit_penjualan	= $_POST['unit_penjualan'];
	$satuan			= $_POST['satuan'];
	$harga			= $_POST['harga'];
	$total			= $_POST['total'];
	
	$update = mysqli_query($con,"update laporan_bulanan SET id_laporan='$id_laporan', nama='$nama', tanggal='$tanggal', jenis_produk='$jenis_produk', nama_produk='$nama_produk', unit_penjualan='$unit_penjualan', satuan='$satuan', harga='$harga', total='$total' WHERE id_laporan='$id_laporan'");

	if($update){
		echo "<script>window.alert('Data Berhasil Di Update'); window.location.href='index.php'</script>";
	}else{
		echo "<script>window.alert('Data Gagal Di Update'); window.location.href='edit.php'</script>";
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>