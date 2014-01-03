<?php
$a=md5("dell",15);
$b=sha1("acer",15);

echo $a;
echo "<br>".$b."<br>";

echo "<img src=../upload/3091-Tulips.jpg>"."<br>";



						include "koneksi.php";
						$tampil=mysql_query("select * from artikel2");
						$data=mysql_num_rows($tampil);
						while($baris=mysql_fetch_array($tampil)){
                        echo"<img src=../upload/$baris[5] height=500px>";
						}
?>
<p style="background-color:#999; color:#000;>saya</p>