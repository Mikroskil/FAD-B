<nav id="second-nav">

 <div id="judulsampinghome1"><h3>Lokasi Terbaru</h3></div>
 
  <?php
					include "koneksi.php";
					$tampil=mysql_query("select * from artikel2");
					$data=mysql_num_rows($tampil);
					while($baris=mysql_fetch_array($tampil)){
                    echo"              
                  <li]>
				  <li class=\"submenu\">
                        <div class=\"image\">        
                          <a href=index.php?lihat=artikel&id=$baris[0]><img src=/medanisasi/upload/$baris[5]></a>
                        </div>
						
                        <div class=\"info\">
                          <h6 class=\"nav-namlok\"><a href=index.php?lihat=artikel&id=$baris[0]>$baris[3] </a></h6>
                          <p class=\"nav-lokasi\">Lokasi : $baris[6]</p>         
                        </div>
						</li>                
                  </li>";
				  }?>
</nav>
