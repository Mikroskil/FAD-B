      <header>
      <div id="icon"></div>
          <a href="index.php?lihat=home"><div id="logo">
</div></a>
<div id="panel-above">
<input type="search" id="form_cari" placeholder="Cari nama lokasi yang anda inginkan">
<button id="tombol_cari" type="button" >Cari</button>



<div id="sosmed" style="float:right; margin-right:7px; margin-top:5px; width:36%; max-width:130px;">
<a href="http://www.facebook.com/medanisasi"><img src="<?php echo Yii::app()->theme->baseUrl;?>/image/facebook.png" style="margin-left:1%;" /></a>
                <a href="http://www.twitter.com/medanisasi"><img src="<?php echo Yii::app()->theme->baseUrl;?>/image/twitter.png" style="margin-left:1%" /></a>
<a href="mailto:medanisasi.gmail.com"><img src="<?php echo Yii::app()->theme->baseUrl;?>/image/email.png" style="margin-left:1%" /></a>                
                    			
<!--</div>
<div id='MicrosoftTranslatorWidget' class='Light' style='color:white;background-color:#555555; margin-left:10px; float:right; margin-right:10px;'></div>
-->

<?php /*?>
<div id="loginContainer">

                <a href="#" id="loginButton"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Username</label>
                                <input type="text" name="email" id="email" />
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
                            </fieldset>
                            <h3 style="text-align:center; color:#39F; margin-top:0px; padding-top:0px"> Login With:</h3>
                            <input type="submit" id="login" value="Sign in" />
                            <img src="../../image/facebook.png" style="float:right; margin-right:10px">
                            <img src="../../image/twitter.png" style="float:right; margin-right:10px;">
                            <a href="index.php?lihat=register"><input type="button" id="register" value="Register"/></a>
                            <label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
                        </fieldset>
                        <span><a href="#">Forgot your password?</a></span>
                    </form>
                </div><?php */?>
                </div>

</div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('.clearfix ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
    
    <div id="menus">
    <nav class="clearfix">
		<ul class="clearfix" style="z-index:10000">
			<li><a href="index.php?lihat=home">Home</a></li>
			<li><a href="index.php?r=site/page&view=cari_lokasi">Temukan Lokasi</a></li>
			<li><a href="index.php?r=site/page&view=tambah_lokasi">Tambah Lokasi</a></li>
			<li><a href="index.php?r=site/page&view=about_us">Tentang Kami</a></li>
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>
    </div>





















<script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=sh7ZaZTMh_H2SHPq1W-GxQD_L3OTXvjpDdQpOWr0eNTx2oWQvEvtSXtApcArAXY_JC-f_a-ZSB9oSEzvJMClVycKpcQDzEfNi8hNvVhA_ZPUhJIk-gQ_p7UYq8mCaHlE&ctf=True&ui=true&settings=Manual&from=id';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);
</script>