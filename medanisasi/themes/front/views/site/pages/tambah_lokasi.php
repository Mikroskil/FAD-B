<?php require_once('second_nav.php')?>
    	<div id="content">
        <div id="isi">
        <div id="tambah-cover">
           
                    <h3 style="text-align:center; font-size:2.5em; color:#fff; background-color:#339;">Form Tambah Lokasi</h3>
                    
                <p style="font-size:0.9em; text-indent:25px; color:#000; margin:10px 15px;">Jika Anda ingin menambahkan tempat atau lokasi yang Anda ketahui pada situs kami, silahkan isi formulir di bawah ini terlebih dahulu. Kelengkapan data yang Anda isikan pada formulir di bawah ini, akan sangat membantu kami dalam melakukan verifikasi terhadap tempat atau lokasi yang Anda rekomendasikan.</p>
                    
               
               <div class="form">
                                      <form class="form-horizontal" method="post" action="index.php?r=site/page&view=terima-kasih">
                                          <div class="control-group">
                                            <label class="control-label" for="name">Nama</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" id="nama" name="nama">
                                            </div>
                                          </div>
                                          <div class="control-group">
                                            <label class="control-label" for="email">Email</label>
                                            <div class="controls">
                                              <input type="email" class="input-large" id="email" name="email">
                                            </div>
                                          </div>
                                          <div class="control-group">
                                            <label class="control-label" for="email">Judul</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" id="judul" name="judul">
                                            </div>
                                          </div>
                                          <div class="control-group">
                                            <label class="control-label" for="comment">Artikel</label>
                                            <div class="controls">
                                              <textarea class="input-xlarge" id="artikel" name="artikel"></textarea>
                                            </div>
                                          </div>
                                          <div class="control-group">
                                            <label class="control-label" for="comment">Lokasi</label>
                                            <div class="controls">
                                              <textarea class="input-xlarge" id="lokasi" name="lokasi"></textarea>
                                            </div>
                                          </div>
                                          <div class="form-actions">
                                            <button type="submit" class="btn">Kirim</button>
                                            <button type="reset" class="btn">Reset</button>
                                          </div>
                                      </form>
                                    </div>
                                   
               </div>
                
            <footer id="taq">
                <p style="padding-top:0.4%">All right reserved, &copy; 2013. Medanisasi.com.<br>Develeopment by <strong>FAD-B Team</strong></p>
            </footer>
           </div>
        </div>
