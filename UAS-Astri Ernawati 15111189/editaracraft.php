<?php
include 'koneksi.php';
$id = $_GET['id'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];
$login= mysqli_query($conn ,"UPDATE `aracraft`.`admin` SET
         `nama`='$nama',
         `jenis`='$jenis',
         `warna`='$warna',
         `jumlah`='$jumlah',
         `keterangan`='$keterangan'
          WHERE  `id`=$id;");


echo "Data berhasil di update ";