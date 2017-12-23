<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "aracraft";

$conn = mysqli_connect($server,$username,$password,$database) or die ("Koneksi ke server gagal");
// mysql_connect($server,$username,$password) or die ("Koneksi ke server gagal");
// mysql_select_db($database) or die (mysql_error());

?>