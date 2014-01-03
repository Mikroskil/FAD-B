<?php
session_start();
include "koneksi.php";
if ($_SESSION['username'] && $_SESSION['password']){
    //$sql = mysql_query("SELECT * FROM user WHERE nama='".$_SESSION['username']."' AND pass='".$_SESSION['password']."'");
    //$hasil = mysql_fetch_assoc($sql);
	//echo "Selamat Datang <b>".$hasil['nama']."</b> | <a href='logout.php'>Logout</a>";
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Medanisasi</title>

  <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>-->
  <link href="style/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="style/font-awesome.css">
  <link rel="stylesheet" href="style/flexslider.css">
  <link rel="stylesheet" href="style/prettyPhoto.css">
  <link href="style/style.css" rel="stylesheet">
  <link href="style/bootstrap-responsive.css" rel="stylesheet">

  <link rel="shortcut icon" href="img/favicon/t5-2.png">
</head>

<body>

<!-- Navbar -->

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="nav-collapse collapse">
        	<form class="form-search s-widget" style="display:inline-block;" method="post" action="index2.php?lihat=cari">
              <div class="input-append">
                <input type="search" class="input-small search-query" style="width:300px;" placeholder="Cari Artikel" name="cari">
                <button type="submit" class="btn btn-danger">Cari</button>
              </div>
            </form>
        
          <ul class="nav pull-right">
            <li><a href="logout.php">Logout</a></li>            
          </ul>
        </div>
      </div>
    </div>
  </div>

<!-- Navbar -->


<!-- Sliding box -->
   <div class="slide-box">
      <div class="bor"></div>
      <div class="padd">
        <div class="slide-box-button">
          <i class="icon-chevron-left"></i>
        </div>
        <h5>Hai.., Broo...</h5>
        Temukan kami juga di sini yaa....

        <hr />

        <div class="social">
          <a href="#"><i class="icon-facebook facebook"></i></a>
          <a href="#"><i class="icon-twitter twitter"></i></a>
          <a href="#"><i class="icon-google-plus google-plus"></i></a>
        </div>
      
      </div>
    </div>

<!-- Sliding box -->    

<!-- Main -->

<div class="content">

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="logo">
      <a href="#"><img src="img/b-logo.png" alt="" /></a>
    </div>



        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
        <div class="s-content">

          <ul id="nav">
            <!-- Main menu -->
            <li><a href="index2.php?lihat=home" class="open br-red"><i class="icon-home"></i> Home</a></li>

            <li class="has_sub"><a href="#" class="br-blue"><i class="icon-list-alt"></i> Cari Lokasi  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
              <ul>
              <?php
						include "koneksi.php";
						$tampil=mysql_query("select * from kategori");
						$data=mysql_num_rows($tampil);
						while($baris=mysql_fetch_array($tampil)){
                        echo"<li><a href=index2.php?lihat=carikt&cari=$baris[1]>$baris[1]</a></li>";
						}?>
              </ul>
            </li>  

            <li><a href="index2.php?lihat=tamlok" class="br-yellow"><i class="icon-envelope-alt"></i> Tambah Lokasi</a></li>
          </ul>

        </div>



  </div>
  <!-- Sidebar -->

  <!-- Mainbar -->
  <div class="mainbar">

    <!-- About Us -->

    <div class="cslider-box">
      <div class="cslider">
         <div class="container-fluid">
            <div class="row-fluid">
              <div class="span6">

                <div class="box-body">
                  <h6>About Us</h6>
                  <hr />
                  <p>Dictumst tincidunt, natoque! Dictumst! Arcu parturient, dis aliquam odio sed? Non duis ultrices phasellus ac odio. Risus ridiculus, enim. Porta placerat dignissim arcu lundium porta est velit etiam! Sed est. Lundium ac! Ultrices nisi, pid duis? Arcu habitasse amet montes habitasse velit vel proin adipiscing, enim a nisi, scelerisque nec augue augue, phasellus velit elementum dictumst? Ac placerat, et nunc, pellentesque nunc cursus! Aenean. Mattis vel ridiculus dis vut? Enim. Sed elementum? Amet nec a, a? Placerat etiam? Cras egestas, pulvinar duis elementum aenean est platea! Etiam in elit natoque integer et et sit sed mauris. Ultrices ridiculus dolor sit amet et tempor sit placerat? Nisi parturient risus! Dictumst tincidunt quis egestas, cum phasellus urna dignissim nisi pulvinar sociis pellentesque.</p>
                  <div class="clearfix"></div>
                 <hr />

                <div class="social">
                  <a href="#"><i class="icon-facebook facebook"></i></a>
                  <a href="#"><i class="icon-twitter twitter"></i></a>
                  <a href="#"><i class="icon-google-plus google-plus"></i></a>
                </div>

                 <hr />
                 <div class="address">
                    <div class="row-fluid">
                       <div class="span6">
                          <address>
                            <span class="bold"><i class="icon-home"></i> Medanisasi, Inc.</span><br>
                            Jln. M.H. Thamrin,<br>
                            Medan, Indonesia<br>
                          </address>
                       </div>
                       <div class="span6">
                          <address>
                            <i class="icon-user"></i> <span class="bold">Medanisasi</span><br>
                            <i class="icon-envelope-alt"></i> <a href="mailto:#">medanisasi@gmail.com</a><br>
                            <i class="icon-signal"></i> 1234567890
                          </address>
                       </div>
                    </div>
                 </div>

                </div>  

              </div>
              <div class="span6">

                <div class="box-body">
                  
                  <h6>Find Us</h6>
                  <hr />
                  <div class="form">
                   <iframe width="500" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Mikroskil,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Mikroskil&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Mikroskil,+Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.587458,98.690722&amp;spn=0.003748,0.005364&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Mikroskil,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Mikroskil&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Mikroskil,+Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.587458,98.690722&amp;spn=0.003748,0.005364&amp;z=17&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>
                 </div>

                </div> 

              </div>
            </div>
         </div>
      </div>
      <div class="cslider-btn"><i class="icon-angle-down"></i></div>
    </div>

    <!-- About Us -->



	<?php
		include "koneksi.php";
		if ($_GET['lihat']=="home"){
		include "home2.php";}
		else if($_GET['lihat']=="tamlok"){
		include "tamlok.php";}
		else if($_GET['lihat']=="cari"){
		include "cari2.php";}
		else if($_GET['lihat']=="carikt"){
		include "carikategori2.php";}
		else if($_GET['lihat']=="login"){
		include "login.php";}
		else if($_GET['lihat']=="login2"){
		include "login2.php";}
		else if($_GET['lihat']=="register"){
		include "register.php";}
		else if($_GET['lihat']=="makasi"){
		include "makasi.php";}
		else if($_GET['lihat']=="artikel"){
		include "viewartikel.php";}
		else{
		require_once "home.php";}
	?>
    

  </div>
  <!-- Mainbar -->
<div class="clearfix"></div>
  <!-- Footer -->             
    <div class="foot">
	  <div class="bor"></div>
      <div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="copy" style="margin-top:10px;">Copyright &copy; 2014 - Designed by Medanisasi Team</div>
			</div>
		</div>
		
      </div>
    </div> 
  <!-- Footer-->

</div>

<div class="clearfix"></div>

<!-- Main -->



<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="js/filter.js"></script> <!-- Filter JS -->
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script> <!-- CarouFredSel -->
<script src="js/jquery.flexslider-min.js"></script> <!-- Flexslider -->
<script src="js/jquery.isotope.js"></script> <!-- Isotope -->
<script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
<script src="js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="js/custom.js"></script> <!-- Main js file -->
</body>
</html>

<?php
}else{
    //header("location:login.php");
	header('location:index.php?lihat=login');
}
?>