<?php
session_start();
include"conn.php";
$a=$_REQUEST['user1'];
$b=$_REQUEST['pass2'];

if(empty($a))
{
    echo "<script>alert('Maaf, Anda harus mengisi user');
	javascript:history.go(-1)</script>";
	include "../index.php";
	exit();
}

if(empty($b))
{
    echo "<script>alert('Maaf, Anda harus mengisi password');
	javascript:history.go(-1)</script>";
	include "../index.php";
	exit();
}


//pembacaan data ke database tabel
$query0 = mysql_query("select * from user_tb where username='$a' and password='$b'");
if($ketemu0 = mysql_fetch_array($query0))
{
    //jika ketemu pada database user dan password nya
    $SES_NAMA=$a;
	if(!isset($_SESSION['namauser']))
	{
	$_SESSION['namauser'] = $SES_NAMA;
	}
	
	echo "<script>alert('Selamat Datang..!!');
    javascript:history.go(1)</script>";
	header ("location: ../menu.php");
	exit;
}
else
{
    //jika tidak ketemu data user dan password pada database tabel
    echo "<script>alert('Maaf,user dan password tidak cocok');
	javascript:history.go(-1)</script>";
	include "../index.php";
	exit();
}
?>