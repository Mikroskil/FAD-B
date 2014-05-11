<div id="slider">
<?php 
		$Mslide=Slide::model()->findAll();
		$path=Yii::app()->baseUrl.'/upload/slide/';
		$img=array();
		foreach ($Mslide as $row){
			$img[]=array(
				'src'=>$path.$row->file,
				'caption'=>'<b>'.$row->judul.'</b>' . $row->ket
			);
		}
?>
<div class="flat-carousal">
	<?php if($img): ?>
		<?php $this->widget('application.extensions.nivoslider.ENivoSlider', array(
	    			'images'=>$img )
				);
		?>
	<?php endif; ?>	
	</div>
 
            </div>
       

                    <h3 style="text-align:center; font-size:1.5em; background-color:#06F; color:#fff; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;">Selamat Datang di Medanisasi.com</h3>

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
                          <a href=index.php?lihat=artikel&id=$baris[0]><img src=/medanisasi/upload/$baris[5]></a>
                        </div>
						
                        <div class=\"\">
                          <h6 class=\"home-namlok\"><a href=index.php?r=artikel&id=$baris[0]>$baris[3] </a></h6>
                          <p class=\"home-lokasi\">Lokasi : $baris[6]</p>         
                        </div>
						</div>                
                  </li>";
				  }?>
                                                                                             
              </ul>

              

                    
                