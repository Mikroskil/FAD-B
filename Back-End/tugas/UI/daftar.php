<?php
include "koneksi.php";

$idkode="usr";
$query = mysql_query("SELECT max(iduser) as maxUSER FROM user");
$data  = mysql_fetch_array($query);
$idMax = $data['maxUSER'];
$noUrut = (int) substr($idMax, 3, 5);
$noUrut++;
$id = $idkode . sprintf("%00005s", $noUrut);

//$pass=md5($_POST['password'],15);
$pass=$_POST['password'];

mysql_query("insert into user (iduser,pass,nama,email) values
('$id','$pass','$_POST[username]','$_POST[email]')");

//echo"<center>Terima Kasih</center>";
header('location:index.php?lihat=login');
?>
