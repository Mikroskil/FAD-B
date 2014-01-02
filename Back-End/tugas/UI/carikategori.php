      <div class="container-fluid">

        <!-- Title starts -->
        <div class="page-title">
          <h2>Results</h2>
          <hr />
        </div>
        <!-- Title ends -->



        <!-- Content starts -->

        <div class="box-body timeline">
          <div class="row-fluid">

            <!-- Note down the calss name before editing -->
			<?php
						include "koneksi.php";
						$tampil=mysql_query("select * from artikel2 where kategori like '%$_GET[cari]%' ");
						$data=mysql_num_rows($tampil);
						while($baris=mysql_fetch_array($tampil)){
                        echo"
            <div class=span3>
                           <div class=time>
                              <div class=\"tidate b-red\">
                                 <center>$baris[3]</center>
                              </div>
                              <div class=timatter>
                                 <a href=index.php?lihat=artikel&id=$baris[0]><img src=../upload/$baris[5]></a>
                                 <p>Lokasi : $baris[6]</p>
                              </div>
                              <div class=clearfix></div>
                           </div>
                           
                        </div>";
						}?>



          </div>
        </div>

        <!-- Content ends -->

      </div>
