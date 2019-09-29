<?php
if(isset($_POST['simpan'])){

	include ('../koneksi.php');

	$nama			= $_POST['nama'];
	$tanggal		= $_POST['tanggal'];
	$jenis_produk	= $_POST['jenis_produk'];
	$nama_produk	= $_POST['nama_produk'];
	$unit_penjualan	= $_POST['unit_penjualan'];
	$satuan			= $_POST['satuan'];
	$harga			= $_POST['harga'];
	$total			= $_POST['total'];

	$query = "INSERT INTO `laporan_bulanan` (`id_laporan`,`nama`,`tanggal`,`jenis_produk`,`nama_produk`,`unit_penjualan`,`satuan`,`harga`,`total`) VALUES (NULL,'$nama','$tanggal','$jenis_produk','$nama_produk','$unit_penjualan','$satuan','$harga','$total');";

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