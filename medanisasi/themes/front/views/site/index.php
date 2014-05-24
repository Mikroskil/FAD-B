<?php require_once('pages/kategoria.php')?>

<div id="content">
     <article id="aside-article">
                <article id="isi" style="float:left; width:100%; height:100%;">

 
          
                    <ul>
     <?php
		include "koneksi.php";
		if($_GET['lihat']=="artikel"){
			include "viewartikelnolog.php";}
		else if($_GET['lihat']=="carikt"){
			include "carikategori.php";}
		else if($_GET['lihat']=="register"){
			include "register.php";}
		else if($_GET['lihat']=="login"){
			include "login.php";}
		else if($_GET['lihat']=="login2"){
			include "login_warning.php";}
		else if($_GET['lihat']=="masuk"){
			include "masuk.php";}
		else{
			require_once "home.php";}
	?>
              </ul> 
      </article>
                <div style=" width:100%; background:#222; display:inline-block; border-top:ridge #06f; color:#fff; text-align:center;">
                <p>All right reserved, &copy; 2013. Medanisasi.com.<br>Develeopment by <strong>FAD-B Team</strong></p>
            </div>
            </article>
    
        </div>