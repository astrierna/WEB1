<?php

include 'koneksi.php';
$list= mysqli_query($conn ,"SELECT * FROM produk where idproduk=".$_GET['id']);
$list=$list->fetch_array();
echo "<h1> TABEL STOCK PRODUCT ARACRAFT </h1>";
echo "<hr>";
echo "<form action='editaracraft.php?id=".$_GET['id']."' method='POST'>";
echo "<table width = 500 border =1>
<tr><td>NAMA</td>      <td> : <input type=text name=nama value='".$list['nama']."' size=50></td></tr>
<tr><td>JENIS</td>     <td> : <input type=text name=jenis value='".$list['jenis']."' size=50></td></tr>
<tr><td>WARNA</td>     <td> : <input type=text name=warna value='".$list['warna']."'size=50></td></tr>
<tr><td>JUMLAH</td>    <td> : <input type=text name=jumlah value='".$list['jumlah']."' size=50></td></tr>
<tr><td>KETERANGAN</td><td> : <input type=text name=keterangan value='".$list['keterangan']."' size=50></td></tr>
<tr><td colspan=2>
<input type=submit value=Simpan></td></tr>
</table></form>
";


?>