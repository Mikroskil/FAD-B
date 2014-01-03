      <div class="container-fluid">

        <div class="box-body blog">
          <div class="row-fluid">

                        <div class="span8">
                           <div class="posts">
                           
                              <?php
						include "koneksi.php";
						$tampil=mysql_query("select * from artikel2 where idartikel like '%$_GET[id]%' ");
						$data=mysql_num_rows($tampil);
						$sql = mysql_query("SELECT * FROM komentar where idartikel=$_GET[id]");
						$hasil = mysql_fetch_array($sql);
						//$sql2 = mysql_query("SELECT * FROM user where iduser=$hasil[iduser] ");
						//$hasil2 = mysql_fetch_array($sql2);
						while($baris=mysql_fetch_array($tampil)){
                        echo"
                              <div class=\"entry\">
                                 <h2><a href=index2.php?lihat=artikel&id=$baris[0]>$baris[3]</a></h2>
                                 
                                 <div class=\"meta\">
                                    <i class=\"icon-calendar\"></i>$baris[8] <i class=\"icon-user\"></i> $baris[9] 
                                 </div>
                                 
                                 <div class=\"bthumb\">
                                    <a href=#><img src=../upload/$baris[5]></a>
                                 </div>
                                 
                                 <p style=\"background-color:inherit\">$baris[4]</p>
                              </div>";
							  ?>
                  
                              <div class="comments">
                                 
                                    <div class="title"><h5><?php echo "Komentar";//echo len($hasil[komentar])." Komentar";?></h5></div>
                                    
                                    <ul class="comment-list">
                                      <li class="comment">
<!--                                          <div class="comment-author"><a href="#"><?php echo "$hasil2[email]";?></a></div>-->
                                          <p><?php echo "$hasil[komentar]";?></p>
                                          <div class="clearfix"></div>
                                      </li>
                                      
                                    </ul>
                              </div>
                                                           
                              <div class="respond well">
                                 <div class="title"><h5>Komentar</h5></div>
                                 
                                 <div class="form">
                                   <form class="form-horizontal" method="post" action="index2.php?lihat=komentar&id=<?php echo"$baris[0]";?>">
                                       <div class="control-group">
                                         <label class="control-label" for="name">Nama</label>
                                         <div class="controls">
                                           <input type="text" class="input-large" id="nama" name="nama">
                                         </div>
                                       </div>
                                       
                                       <div class="control-group">
                                         <label class="control-label" for="comment">Komentar</label>
                                         <div class="controls">
                                           <textarea class="input-xlarge" id="komentar" rows="3" name="komentar"></textarea>
                                         </div>
                                       </div>
                                       <div class="form-actions">
                                         <button type="submit" class="btn">Kirim</button>
                                         <button type="reset" class="btn">Reset</button>
                                       </div>
                                   </form>
                                 </div>
                              </div>
                              


                              <div class="clearfix"></div>
                              
                           </div>
                        </div>  

                        <div class="span4">

                           <?php echo "
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
                             
                           </div>";
						}?>                                                
                        </div>
                  

          </div>
        </div>

      </div>
