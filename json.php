<?php
$user_name = "root";
$password = "";
$database = "test";
$host_name = "localhost";
$connect_db=mysqli_connect($host_name, $user_name, $password, $database);
if($connect_db){
	$query = "SELECT tujuan,tanggal from test where tanggal like '%".$_GET['tanggal']."%' and tujuan like '%".$_GET['tujuan']."%'";
	$hasil = mysqli_query($connect_db, $query);
	$emparray = array();
	$no = 1;

	while($kolom_db= mysqli_fetch_array($hasil, MYSQL_ASSOC))
	{
		$row_array['tanggal'] = $kolom_db['tanggal'];
		$row_array['tujuan'] = $kolom_db['tujuan'];
		array_push($emparray, $row_array);
	}
echo json_encode($emparray);
mysqli_close($connect_db);

}else{
	echo "Database tidak ada";
	mysqli_close($connect_db);
}

?>