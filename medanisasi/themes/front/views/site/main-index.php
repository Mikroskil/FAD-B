<?php
session_start();
include "koneksi.php";
if ($_SESSION['username'] && $_SESSION['password']){
    //$sql = mysql_query("SELECT * FROM user WHERE nama='".$_SESSION['username']."' AND pass='".$_SESSION['password']."'");
    //$hasil = mysql_fetch_assoc($sql);
	//echo "Selamat Datang <b>".$hasil['nama']."</b> | <a href='logout.php'>Logout</a>";
	
?>

<?php 
require_once('pages/second_nav.php');

?>

<div id="content">
     <article id="aside-article">
                <article id="isi" style="float:left; width:99.6%; height:auto; border-right:2px solid #333; border-top-right-radius:10px;">

 
          
                    <ul>
     <?php
		include "koneksi.php";
		if ($_GET['lihat']=="home"){
			include "main-home.php";}
		else if($_GET['lihat']=="artikel"){
			include "viewartikelnolog.php";}
		else if($_GET['lihat']=="carikt"){
			include "carikategori.php";}
		else if($_GET['lihat']=="register"){
			include "register.php";}
		else if($_GET['lihat']=="login"){
			include "login.php";}
		else if($_GET['lihat']=="login2"){
			include "login_warning.php";}
		else if($_GET['lihat']=="register"){
			include "register.php";}
		else{
			require_once "home.php";}
	?>
    
    
    
    
              </ul> 
      </article>
                
            </article>
<footer id="taq">
                <p style="padding-top:0.4%">All right reserved, &copy; 2013. Medanisasi.com.<br>Develeopment by <strong>FAD-B Team</strong></p>
            </footer>      
        </div>





<?php
}else{
    //header("location:login.php");
	header('location:index.php?lihat=login');
}
?>