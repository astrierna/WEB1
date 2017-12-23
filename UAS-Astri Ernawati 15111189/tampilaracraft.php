<?php
include 'koneksi.php';
$list= mysqli_query($conn ,"SELECT * FROM produk");
?>

<table>
    <tr>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Warna</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
<?php
while ($data = $list->fetch_array()) {
    # code...
    ?>
        
    <tr>
        <td><?php echo($data['nama'])?></td>
        <td><?php echo($data['jenis'])?></td>
        <td><?php echo($data['warna'])?></td>
        <td><?php echo($data['jumlah'])?></td>
        <td><?php echo($data['keterangan'])?></td>
        <td><a href="hapusaracraft.php?id=<?php echo($data['idproduk'])?>">Hapus</a>
        <a href="formeditaracraft.php?id=<?php echo($data['idproduk'])?>">Edit</a></td>
    </tr>

    <?php
}
?>

</table>