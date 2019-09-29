<?php
include('../koneksi.php');
// ambil data file
$filename 			= $_FILES["file"]["name"];
$file_basename 		= substr($filename, 0, strripos($filename, '.'));
$file_ext 			= substr($filename, strripos($filename, '.'));
$filesize 			= $_FILES["file"]["size"];
$allowed_file_types = array('.pdf');

if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000000))
{
	// Ubah nama file
	$newfilename = md5($file_basename) . $file_ext;
	if (file_exists("../img/ujian/" . $newfilename))
	{
		// Jika file sudah ada
		echo "<script>window.alert('File Sudah Ada!'); window.location.href='tambah.php'</script>";
	}
	else
	{
		move_uploaded_file($_FILES["file"]["tmp_name"], "../img/ujian/" . $newfilename);

    // ambil data dari form
    $file 			= $newfilename;
    $nama 			= $_POST['nama'];
    $tanggal 		= $_POST['tanggal'];
    $subject 		= $_POST['subject'];

    // query
    $query = "INSERT INTO `ujian_upload` (`id_uploadujian`,`nama`,`tanggal`,`subject`,`file`) VALUES (NULL, '$nama','$tanggal','$subject','$file');";

    $hasil = mysqli_query($con, $query);

    // cek keberhasilan pendambahan data
    if ($hasil == true) {
      echo "<script>window.alert('Selamat! Data Berhasil Di Upload'); window.location.href='index.php'</script>";
    } else {
      echo "<script>window.alert('Maaf! Data Gagal Di Upload'); window.location.href='tambah.php'</script>";
    }

	}
}
elseif (empty($file_basename))
{
	// file belum dipilih
	echo "<script>window.alert('Pilih File Untuk Diunggah'); window.location.href='tambah.php'</script>";
}
elseif ($filesize > 2000000000)
{
	// ukuran file terlalu besar
	echo "<script>window.alert('File Yang Diunggah Terlalu Besar!'); window.location.href='tambah.php'</script>";
}
else
{
	// format file bukan gambar
	echo "<script>window.alert('Format File Salah'); window.location.href='tambah.php'</script>";
	unlink($_FILES["file"]["tmp_name"]);
}
?>