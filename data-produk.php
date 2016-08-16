<?php
$con    = new mysqli("localhost","root", "", "ajax");
$result = $con->query("select * from produk");
?>

<h3>Data Produk</h3>
<hr>
<table class="table table-bordered table-stripped">
    <thead>
        <th>#</th>
        <th>Nama</th>
        <th>Merek</th>
        <th>Harga</th>
        <th>Option</th>
    </thead>
    <?php
    $i      = 1;
    while($record = $result->fetch_array()){
    ?>

    <tr>
        <td>$i</td>
        <td><?=$record['name']?></td>
        <td><?=$record['price']?></td>
        <td><?=$record['brand']?></td>
        <td>
            <button id="editButton" value="<?=$record['id']?>" class="btn btn-warning">Edit</button>
            <button id="deleteButton" value="<?=$record['id']?>" class="btn btn-danger">Hapus</button>
        </td>
    </tr>
    <?php
        $i++;
    }
    ?>   
</table>