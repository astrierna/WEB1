<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login= mysqli_query($conn ,"SELECT * FROM admin WHERE username='$username' AND password='$password'");

$result= $login->num_rows;
if($result>0){
	$data= mysqli_fetch_array($login);
	session_start();
	$_SESSION['username'] = $data['username'];
	header("location: formaracraft.php");
}else{
	echo "Username Dan Password Salah";
	header("location:formlogin.php");
}