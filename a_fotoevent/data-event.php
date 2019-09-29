<?php
  include "../koneksi.php";

$ambil_event = "SELECT * FROM foto WHERE kategori = 'Foto Event' ";
$cek_event = mysqli_query($con, $ambil_event);

$data_event = array();

while ($row = mysqli_fetch_assoc($cek_event)) {
  $data_event[] = $row;
}
