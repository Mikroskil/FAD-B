<?php
include "koneksi.php";
$batas=10;
$halaman=$_GET['halaman'];
//$halaman=1;
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{
$posisi=($halaman-1) * $batas;
}

$tampil=mysql_query("select * from bukutamu order by no LIMIT $posisi,$batas");
$bnyk=mysql_query("select * from bukutamu order by no");
$data=mysql_num_rows($bnyk);
echo"<table border=1 width=35% align=center cellpading=2 cellspacing=2>
<tr><td colspan=5><b><font size=5 color=red><center>DAFTAR DATA PENGUNJUNG</tr>
<tr><td colspan=5><b><font size=5 color=red><center>Banyak Data : $data		
<input value=Cetak onclick=print() type=button></td></tr>

<tr align=center>
<td><font color=red>No</td>
<td><font color=red>Nama</td>
<td><font color=red>Email</td>
<td><font color=red>Komentar</td>

<td><font color=red>AKSI</td></tr>";
$no=$posisi+1;
while($baris=mysql_fetch_array($tampil)){
echo"<tr align=center>
<td><font color=red>$no</td>
<td>$baris[1]</td>
<td>$baris[2]</td>
<td>$baris[3]</td>



<td><font color=red>

<a href=index.php?lihat=dtamu&name=$baris[0] onclick=\"return confirm ('apakah anda akan menghapus data dengan NAMA= $baris[1] ?')\">Delete</a></td></tr>";
$no++;
}	

echo"</table></form>";
//mysql_close;
$tampil2=mysql_query("select * from bukutamu order by no");
$jlhdata=mysql_num_rows($tampil2);
$jlh=ceil($jlhdata/$batas);
echo"<center><br>Halaman :";
$file="index.php?lihat=tamu";
for($i=1;$i<=$jlh;$i++)
	if ($i != $halaman){
		echo " <a href=$file&halaman=$i>$i</a> | ";
		}
	else{
	echo"<b>$i</b> | ";
	}
?>