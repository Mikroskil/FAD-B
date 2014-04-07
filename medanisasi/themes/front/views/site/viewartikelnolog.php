     <?php
						include "pages/koneksi.php";
						$tampil=mysql_query("select * from artikel2 where idartikel like '%$_GET[id]%' ");
						$data=mysql_num_rows($tampil);
						while($baris=mysql_fetch_array($tampil)){
                        echo"
<div id=\"content-cover\">
<div id='utama-post'> 
<div id=\"title-article\">
                                 <h2 class=\"title-content\"><a href=index.php?lihat=artikel&id=$baris[0]>$baris[3]</a></h2>
</div>                                 
                                 <div class=\"property-content\">
                                    <div id=\"icon_calendar\"></div>$baris[8]  <div id=\"icon_author\"></div> $baris[9] 
                                 </div>
                                 
                                 
                                 
                                 <p style=\"background-color:inherit\">$baris[4]</p>
 </div>
 </div>
<div id='widget'>
				<div class=\"bthumb\">
                                    <a href=#><img src=/medanisasi/upload/$baris[5]></a>
                                 </div>
 <h4>Maps</h4>
<p>$baris[7]</p>
";}?>

