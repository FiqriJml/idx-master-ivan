<?php
  include "../koneksi.php";

$ambil_unggulan = "SELECT * FROM foto WHERE kategori = 'Foto Unggulan' ";
$cek_unggulan = mysqli_query($con, $ambil_unggulan);

$data_unggulan = array();

while ($row = mysqli_fetch_assoc($cek_unggulan)) {
  $data_unggulan[] = $row;
}
