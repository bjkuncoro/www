<?php
$id     = $_GET['id'];
$con    = new mysqli("localhost", "root", "", "ajax");
$result = $con->query("SELECT * FROM produk WHERE id="+$id);
extract($result->fetch_assoc());

?>

<h3>Form Update Produk</h3>
<hr>
<form action="update.php?id=<?=$id?>" method="POST">
    <div class="form-group">
        <label for="">Nama</label>
        <div><input type="text" class="form-control" id="name" name="name" value="<?=$name?>"></div>
    </div>

    <div class="form-group">
        <label for="">Merek</label>
        <div><input type="text" class="form-control" id="name" name="brand" value="<?=$brand?>"></div>
    </div>

    <div class="form-group">
        <label for="">Harga</label>
        <div><input type="text" class="form-control" id="name" name="price" value="<?=$price?>"></div>
    </div>

    <div class="form-group">
        <a class="btn btn-primary" id="simpanUpdate" href="#">Update</a>
    </div>
</form>