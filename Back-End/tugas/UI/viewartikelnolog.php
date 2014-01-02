      <div class="container-fluid">





        <!-- Content starts -->

        <div class="box-body blog">
          <div class="row-fluid">

                        <div class="span8">
                           <div class="posts">
                           
                              <!-- Each posts should be enclosed inside "entry" class" -->
                              <!-- Post one -->
                              <?php
						include "koneksi.php";
						$tampil=mysql_query("select * from artikel2 where idartikel like '%$_GET[id]%' ");
						$data=mysql_num_rows($tampil);
						while($baris=mysql_fetch_array($tampil)){
                        echo"
                              <div class=\"entry\">
                                 <h2><a href=index.php?lihat=artikel&id=$baris[0]>$baris[3]</a></h2>
                                 
                                 <div class=\"meta\">
                                    <i class=\"icon-calendar\"></i>$baris[8] <i class=\"icon-user\"></i> $baris[9] 
                                 </div>
                                 
                                 <div class=\"bthumb\">
                                    <a href=#><img src=../upload/$baris[5]></a>
                                 </div>
                                 
                                 <p style=\"background-color:inherit\">$baris[4]</p>
                              </div>
                              

  

                               

                               
                              <div class=\"clearfix\"></div>
                              
                           </div>
                        </div>  

                        <div class=\"span4\">

                            <!-- Sidebar 2 -->

                           <div class=\"blog-sidebar\">
                              <!-- Widget -->

                              <div class=\"widget\">
                                 <h4>Lokasi</h4>
                                 <p>$baris[6]</p>

                              </div>
                              
                              <div class=\"widget\">
                                 <h4>Maps</h4>
                                 <p>$baris[7]
                                 
                                 </p>

                              </div>
                             
                           </div>                                                
                        </div>
						";}?>
                  

          </div>
        </div>

        <!-- Content ends -->

      </div>
