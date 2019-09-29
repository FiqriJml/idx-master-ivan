<?php
//fetch.php;
if(isset($_POST["view"]))
{
 include("koneksi.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE history_transaksi SET status=1 WHERE status=0";
  mysqli_query($con, $update_query);
 }
 $query = "SELECT * FROM history_transaksi ORDER BY id DESC LIMIT 5";
 $result = mysqli_query($con, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["nama"].'</strong><br />
     <small><em>'.$row["tipe_mobil"].'</em></small><br>
     <small><em>'.$row["tipe_transaksi"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM history_transaksi WHERE status=0";
 $result_1 = mysqli_query($con, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>