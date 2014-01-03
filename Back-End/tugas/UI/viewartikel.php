      <div class="container-fluid">

        <div class="box-body blog">
          <div class="row-fluid">

                        <div class="span8">
                           <div class="posts">
                           
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
                              </div>";
							  ?>
                  
                              <div class="comments">
                                 
                                    <div class="title"><h5>2 Comments</h5></div>
                                    
                                    <ul class="comment-list">
                                      <li class="comment">
                                        <a class="pull-left" href="#">
                                          <img class="avatar" src="http://placekitten.com/64/64">
                                        </a>
                                          <div class="comment-author"><a href="#">Ashok</a></div>
                                          <div class="cmeta">Commented on 25/12/2012</div>
                                          <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                          <div class="clearfix"></div>
                                      </li>
                                      <li class="comment reply">
                                        <a class="pull-left" href="#">
                                          <img class="avatar" src="http://placekitten.com/64/64">
                                        </a>
                                          <div class="comment-author"><a href="#">Ashok</a></div>
                                          <div class="cmeta">Commented on 25/12/2012</div>
                                          <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                          <div class="clearfix"></div>
                                      </li>
                                    </ul>
                              </div>
                                                           
                              <div class="respond well">
                                 <div class="title"><h5>Komentar</h5></div>
                                 
                                 <div class="form">
                                   <form class="form-horizontal">
                                       <div class="control-group">
                                         <label class="control-label" for="name">Name</label>
                                         <div class="controls">
                                           <input type="text" class="input-large" id="name">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label" for="email">Email</label>
                                         <div class="controls">
                                           <input type="text" class="input-large" id="email">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label" for="website">Website</label>
                                         <div class="controls">
                                           <input type="text" class="input-large" id="website">
                                         </div>
                                       </div>
                                       <div class="control-group">
                                         <label class="control-label" for="comment">Comment</label>
                                         <div class="controls">
                                           <textarea class="input-xlarge" id="comment" rows="3"></textarea>
                                         </div>
                                       </div>
                                       <div class="form-actions">
                                         <button type="submit" class="btn">Submit</button>
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
