<?php
include "koneksi.php";
$id=$_GET['id'];
$sql = mysql_query("SELECT * FROM user WHERE nama='".$_SESSION['username']."' ");
$hasil = mysql_fetch_assoc($sql);

mysql_query("insert into komentar (idartikel,iduser,komentar) values
('$id','$hasil[iduser]','$_POST[komentar]')");

echo"<center>Terima Kasih</center>";
//header('location:index2.php?lihat=artikel&id=$id');
echo"<a href=index2.php?lihat=artikel&id=$id><b>Kembali...</b></a></center>";
?>
