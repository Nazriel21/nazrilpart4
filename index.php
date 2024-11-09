<?php
include "koneksi.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>data penjualan</title>
</head>
<body>
    <table border="1">
        <caption> data stok barang</caption>
        <form action=""method="get">
            <select name="filter">
                <option value="fashion">fashion</option> 
                <option value="food">food</option> 
                <option value="farmasi">farmasi</option> 
</select>
<input type="submit"value="filter"/>
</form>
</caption>
<tr>
    <th>no</th>
    <th>nama barang</th>
    <th>harga</th>
    <th>stok barang</th>
    <th>kategori</th>
</tr>
<?php
$query="SELECT * FROM barang where kategori='$_GET[filter]'";
$result = $mysqli->query($query);
$no=0;
while($row=$result->fetch_assoc()){
    $no++;
    ?>
    <tr>
        <td><?=$no;?></td>
        <td><?=$row['nama_barang'];?></td>
        <td><?=formatrupiah($row['harga']);?></td>
        <td><?=$row['stok_barang'];?></td>
        <td><?=$row['kategori'];?></td>

</tr>
<?php
}
?>
</table>
</body>
</html>