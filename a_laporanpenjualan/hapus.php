<?php

if(isset($_GET['id_laporan'])){
	include('../koneksi.php');
	$id_laporan = $_GET['id_laporan'];
	$del = mysqli_query($con,"delete from laporan_bulanan where id_laporan='$id_laporan'");

		if($del){
			
			echo "<script>window.alert('Data Berhasil Dihapus'); window.location.href='index.php'</script>";
			
		}else{
			
			echo "<script>window.alert('Data Gagal Dihapus'); window.location.href='index.php'</script>";
		}
	}

?>