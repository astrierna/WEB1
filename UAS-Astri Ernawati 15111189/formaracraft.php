<?php
echo "<h1> TABEL STOCK PRODUCT ARACRAFT </h1>";
echo "<hr>";
echo "<form action='simpanaracraft.php' method='POST'>";
echo "<table width = 500 border =1>
<tr><td>NAMA</td>      <td> :<input type=text name=nama size=50></td></tr>
<tr><td>JENIS</td>     <td> :<input type=text name=jenis size=50></td></tr>
<tr><td>WARNA</td>     <td> :<input type=text name=warna size=50></td></tr>
<tr><td>JUMLAH</td>    <td> :<input type=text name=jumlah size=50></td></tr>
<tr><td>KETERANGAN</td><td> :<input type=text name=keterangan size=50></td></tr>
<tr><td colspan=2>
<input type=submit value=Simpan></td></tr>
</table></form>

<input type=button value=Batal onclick=self.history.back()>
";

?>
<a href="tampilaracraft.php">list produk </a>
    
<a href="formlogin.php">logout </a>