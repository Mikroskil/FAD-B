<div id="slider">
                <canvas id="myCanvas"></canvas>

            </div>
       

                    <h3 style="text-align:center; margin-left:15px; font-size:1.5em;">Selamat Datang di Medanisasi.com</h3>

              <ul class="rps-carousel">
                	<?php
					include "koneksi.php";
					$tampil=mysql_query("select * from artikel2");
					$data=mysql_num_rows($tampil);
					while($baris=mysql_fetch_array($tampil)){
                    echo"              
                  <li]>
				  <div id='artikel_depan'>
                        <div id='artikel_depan_photo'>        
                          <a href=main-index.php?lihat=artikel&id=$baris[0]><img src=/medanisasi/upload/$baris[5]></a>
                        </div>
						
                        <div>
                          <h6><a href=main-index.php?r=artikel&id=$baris[0]>$baris[3] </a></h6>
                          <p>Lokasi : $baris[6]</p>         
                        </div>
						</div>                
                  </li>";
				  }?>
                                                                                             
              </ul>

              

                    
                