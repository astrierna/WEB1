<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];
$login= mysqli_query($conn ,"INSERT INTO aracraft.produk (nama, jenis, warna, jumlah, keterangan) 
        VALUES ('$nama', '$jenis', '$warna', '$jumlah', '$keterangan')");

echo "Data berhasil di simpan ";