<?php
include "koneksi.php";
$id=1;
mysql_query("insert into tam_lok (idtambah,nama,email,judul,artikel,lokasi) values
($id,'$_POST[nama]','$_POST[email]','$_POST[judul]','$_POST[artikel]','$_POST[lokasi]')");

//echo"<center>Terima Kasih</center>";
header('location:index.php?lihat=makasi');
?>
