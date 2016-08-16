<?php
 include "d.php";
 
 $tanggal=$_POST["tanggal"];
 
  
 $result=mysql_query("SELECT * FROM test where tanggal like '%$tanggal%' ");
 $found=mysql_num_rows($result);
 
 if($found>0){
    while($row=mysql_fetch_array($result)){
    echo "<li>$row[tanggal]</br></li>";
    }   
 }else{
    echo "<li>Tidak ada artikel yang ditemukan <li>";
 }
?>