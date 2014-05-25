<?php require_once('kategoria.php')?>

    	<div id="content" style="background-color:#06f;">

        <div id="slider" style="margin-bottom:0px;">
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
<div class="flat-carousal" style="background-color:#222;">
    <?php if($img): ?>
        <?php $this->widget('application.extensions.nivoslider.ENivoSlider', array(
                    'images'=>$img )
                );
        ?>
    <?php endif; ?> 
</div></div>    

<div id="about-cover">
                    <h3 style="text-align:center; font-size:2.5em; color:#fff; background-color:#339; margin-top:20px">Tentang Kami</h3>
                    <p id="text">Menemukan lokasi atau tempat yang bagus dan menarik untuk dikunjungi secara mudah, cukuplah sulit untuk dilakukan. Dikarenakan jumlah media yang kurang memadai untuk memenuhi kebutuhan tersebut. Perkembangan teknologi yang sudah semakin maju di zaman sekarang, memotivasi kami untuk membuat suatu media yang dapat membantu orang-orang dalam menemukan lokasi yang bagus dan menarik untuk dikunjungi. "Medanisasi.com" merupakan wujud nyata dari media yang akan membantu dalam menemukan lokasi-lokasi yang diinginkan.
    </p>
    			
                <div id="img_container">
                    <div class="img_about">
                        <img src="<?php echo Yii::app()->theme->baseUrl;?>/image/medan1.png" />
                    </div>
                    <div class="img_about" style="margin:0 0 0 6%">
                        <img src="<?php echo Yii::app()->theme->baseUrl;?>/image/medan2.png" />
                    </div>
                    <div class="img_about" style="float:right">
                        <img src="<?php echo Yii::app()->theme->baseUrl;?>/image/medan3.png" />
                    </div>
                </div>
                <p>.</p>
                <div style=" margin-top:20px">
                <h2 style="margin-left:25px">Ikon dan Logo : </h2>
                
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/image/ikon-medanisasi.png" style="background-color:#000; margin:17px; border:6px double #3FF" title="Ikon Medanisasi" alt="Solusi Cari Lokasi Kota Medan" />
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/image/logo-medanisasi.png" style="background-color:#000; margin:17px; border:6px double #3ff" title="Logo Medanisasi" alt="Solusi Cari Lokasi Kota Medan" />
                </div>
                <div class="dummy"></div>
                <h2 style="margin-left:25px">Misi : </h2>
                    <ol id="misi" style="border: 5px double #3ff; background-color:#DDF; margin-right:2%;">
                        <li>Memudahkan dalam pencarian lokasi dan landmark di Kota Medan</li>
                        <li>Membantu pengguna yang kebingungan dalam lokasi-lokasi di kota Medan</li>
                        <li>Membantu pengguna mengetahui informasi akan tempat-tempat penting di Kota Medan</li>
                        <li>Memudahkan promosi-promosi tempat di Kota Medan</li>
                        <li>Membantu dalam memperkenalkan kota Medan ke para Turis</li>
                    </ol>
                    
                    
                  <div style=" margin-top:20px">
                <h2 style="margin-left:25px; margin-bottom:10px">Kontak : </h2>
                
                <a href="http://www.facebook.com/medanisasi"><img src="<?php echo Yii::app()->theme->baseUrl;?>/image/facebook.png" style="margin-left:10px;" /><div style="display:inline-block; font-size:28px; font-weight:bold; margin-left:2px; font-family:Verdana, Geneva, sans-serif; color:#06C">Medanisasi</div></a>
                <a href="http://www.twitter.com/medanisasi"><img src="<?php echo Yii::app()->theme->baseUrl;?>/image/twitter.png" style="margin-left:20px" /><div style="display:inline-block; font-size:28px; font-weight:bold; margin-left:2px; font-family:Verdana, Geneva, sans-serif; color:#06C">@medanisasi</div></a>    			
                <a href="mailto:medanisasi.gmail.com"><img src="<?php echo Yii::app()->theme->baseUrl;?>/image/email.png" style="margin-left:20px" /><div style="display:inline-block; font-size:28px; font-weight:bold; margin-left:2px; font-family:Verdana, Geneva, sans-serif; color:#06C">medanisasi@gmail.com</div></a>
                    
                    
                    
                    
                    
                </div>
                
                
                </div>


               <div style=" width:100%; background:#222; display:inline-block; border-top:ridge #06f; color:#fff; text-align:center;">
                <p>All right reserved, &copy; 2013. Medanisasi.com.<br>Develeopment by <strong>FAD-B Team</strong></p>
            </div>
        </div>