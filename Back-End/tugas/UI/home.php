<div class="matter">
      <div class="container-fluid">
        <div class="row-fluid">

          <div class="span12">




            <!-- Slider -->
            
                <div class="box-body">
                  <div class="flexslider">
                    <ul class="slides">
                       
                        <?php
						include "koneksi.php";
						$tampil=mysql_query("select * from artikel2");
						$data=mysql_num_rows($tampil);
						while($baris=mysql_fetch_array($tampil)){
                        echo"
                      <li>
                        
                        <img src=../upload/$baris[5]>
                        <!-- Caption -->
                        <div class=flex-caption>
                          <div class=bor></div>
                           <!-- Title -->
                           <h3>$baris[3]</h3>
                           
                        </div>
                      </li>";
						}?>
                      
                    </ul>
                  </div>
                </div>
              
              <!-- Slider -->

          </div>          
        </div>




              <hr />


        <!-- Recent posts -->

        <div class="box-body recent-posts">
          <div class="mini-title">
            <h3>Recent Posts</h3>
          </div>

          <div class="row-fluid">
            <div class="span12">

              <div class="carousel_nav pull-left">
                <a class="prev" id="car_prev" href="#"><i class="icon-chevron-left"></i></a>
                <a class="next" id="car_next" href="#"><i class="icon-chevron-right"></i></a>
              </div>
              <div class="clearfix"></div>
              <ul class="rps-carousel">
                	<?php
					include "koneksi.php";
					$tampil=mysql_query("select * from artikel2");
					$data=mysql_num_rows($tampil);
					while($baris=mysql_fetch_array($tampil)){
                    echo"              
                  <li>
                      <div class=rp-item> 
                        <div class=rp-image>        
                          <a href=index.php?lihat=artikel&id=$baris[0]><img src=../upload/$baris[5]></a>
                        </div>
                        <div class=rp-details>
                          <h6><a href=index.php?lihat=artikel&id=$baris[0]>$baris[3] </a></h6>
                          <p>Lokasi : $baris[6]</p>         
                        </div>                
                      </div>        
                  </li>";
				  }?>
                                                                                             
              </ul>

            </div>
          </div>

        </div>

        <!-- Recent posts -->

      </div>
    </div>
