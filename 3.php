<?php
include "koneksi.php"; // menghubungkan ke file koneksi.php agar terhubung dengan database
?>
   <?php 

   $input_cari = @$_GET["tujuan"]; 
   $input_tanggal = @$_GET["tanggal"];
   $cari = @$_GET['tujuan'];
   $cari = @$_GET['tanggal'];


   // jika tombol cari di klik
   if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    // query mysql untuk mencari berdasarkan nama negara. .
    $sql = mysql_query("select * from test where tanggal like '%$input_tanggal%' and tujuan like '%$input_cari%' ") or die (mysql_error());   
    } else {
    $sql = mysql_query("select * from test") or die (mysql_error());
    }
    $emparray = array();

   // mengulangi data agar tidak hanya 1 yang tampil
   while($data = mysql_fetch_array($sql)) 

{
             $data['tanggal']; 
             $data['nama_bis']; 
             $data['tujuan'];
             $data['jam']; 
             $data['url'];
    array_push($emparray, $data);
  }

  echo json_encode($emparray);


 }
?>