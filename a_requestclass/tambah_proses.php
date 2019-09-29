
<?php
if(isset($_POST['simpan'])){
	// memulai session, agar variabel session bisa dikenali oleh sistem
	session_start();
	include ('../koneksi.php');

	// $nama			= $_POST['nama']; Hapus index nama, karena nama tidak penting, yang penting itu id_registernya
	$kelas			= $_POST['kelas'];
	$tanggal		= $_POST['tanggal'];
	$lainya			= $_POST['lainya'];

// ayoklah van, mana ada kolom nama di tabel rekues kelas
// tabel `rekues_kelas` itu berisi kolom ini doang (`id_rekues`, `id_register`, `tanggal`, `kelas`, `lainya`) 
// jadi ini querynya sudah Jelas salah
// $query = "INSERT INTO `rekues_kelas` (`id_rekues`,`nama`,`kelas`,`tanggal`,`lainya`) VALUES (NULL, '$nama', '$kelas', '$tanggal', '$lainya');";

// kemudian nama kita ganti dengan id user yang sedang login , yang mana tersimpan pada variabel session
	$id_register = $_SESSION['id_register'];
	$query = "INSERT INTO `rekues_kelas` (`id_register`,`kelas`,`tanggal`,`lainya`) VALUES ('$id_register', '$kelas', '$tanggal', '$lainya');";


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