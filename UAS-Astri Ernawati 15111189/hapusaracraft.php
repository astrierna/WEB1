<?php
include 'koneksi.php';
$id = $_GET['id'];
$login= mysqli_query($conn , "DELETE FROM `aracraft`.`produk` WHERE  `idproduk`=$id");

echo "Data berhasil di hapus ";