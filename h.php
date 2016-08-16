<?php
include "koneksi.php"; // menghubungkan ke file koneksi.php agar terhubung dengan database
?>
<?php 

   $input_cari = @$_GET["tujuan"]; 
   $input_tanggal = @$_GET["tanggal"];
   // $cari = @$_GET['tujuan'];
   // $cari = @$_GET['tanggal'];


   // if($cari)
   // {
        // if($input_cari != "") 
        // {
        // query mysql untuk mencari berdasarkan nama negara. .
            $sql = mysql_query("select * from test where tanggal = '$input_tanggal' AND tujuan = '$input_cari'") or die (mysql_error());   
        // } 
        // else 
        // {
        //     $sql = mysql_query("select * from test") or die (mysql_error());
        // }

        // $cek = mysql_num_rows($sql);

        // echo json_encode($sql);
            $a = mysql_fetch_assoc($sql);
            echo json_encode($a);
   // }
?>