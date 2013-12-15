<?php
include "koneksi.php";
//$pass=md5($_POST['pass']);
mysql_query("insert into user (iduser,pass,nama,email) values
('$_POST[user]','$_POST[pass]','$_POST[name]','$_POST[email]')");

/*echo"<center>Terima Kasih</center>";*/
header('Location: tambah.html');
?>
