<?php
include "koneksi.php";
//$pass=md5($_POST['pass']);
$pass=$_POST['password'];

$login=mysql_query("select * from user where iduser='$_POST[email]' and pass='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($ketemu > 0){
session_start();

	session_register("namauser");
	session_register("passuser");

$_SESSION[namauser]=$r[user];
$_SESSION[passuser]=$r[pass];
//echo"LOGIN BERHASIL</H2>";

header('location:cari.html');
}
//else{
//header('location:form_login2.php');
//}
?>