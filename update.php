<?php
$id    = $_GET['id'];
$name  = $_POST['name'];
$brand = $_POST['brand'];
$price = $_POST['price'];

$con = new mysqli("localhost","root", "", "ajax");
$sql = "UPDATE produk SET name='$name', brand='$brand', price='$price' WHERE id=$id";
$result = $con->query($sql);
if(!$result)
    echo "Error $sql";
else
    echo "Produk Berhasil diupdate";
