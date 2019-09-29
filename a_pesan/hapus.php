<?php

if(isset($_GET['id_pesan'])){
	include('../koneksi.php');
	$id_pesan = $_GET['id_pesan'];
	$del = mysqli_query($con,"delete from pesan where id_pesan='$id_pesan'");

		if($del){
			
			echo "<script>window.alert('Data Berhasil Dihapus'); window.location.href='index.php'</script>";
			
		}else{
			
			echo "<script>window.alert('Data Gagal Dihapus'); window.location.href='index.php'</script>";
		}
	}

?>