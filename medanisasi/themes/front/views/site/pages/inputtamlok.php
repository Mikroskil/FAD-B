<?php
include "koneksi.php";

$idkode="tbh";
$query = mysql_query("SELECT max(idtambah) as maxTAMBAH FROM tam_lok");
$data  = mysql_fetch_array($query);
$idMax = $data['maxTAMBAH'];
$noUrut = (int) substr($idMax, 3, 5);
$noUrut++;
$id = $idkode . sprintf("%00005s", $noUrut);

mysql_query("insert into tam_lok (idtambah,nama,email,judul,artikel,lokasi) values
('$id','$_POST[nama]','$_POST[email]','$_POST[judul]','$_POST[artikel]','$_POST[lokasi]')");

//echo"<center>Terima Kasih</center>";
header('location:index.php?r=site/page&view=terimakasih');
?>
