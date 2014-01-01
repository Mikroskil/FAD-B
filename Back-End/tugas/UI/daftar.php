<?php
include "koneksi.php";

//mysql_query("insert into user (iduser,pass,nama,email) values
//('$_POST[user]','$_POST[password]','$_POST[username]','$_POST[email]')");

//echo"<center>Terima Kasih</center>";
header('location:index.php?lihat=login');
?>
