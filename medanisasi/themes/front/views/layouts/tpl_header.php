<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Medanisasi - Solusi Cari Lokasi</title>
     <meta content='Medanisasi adalah sebuah website yang hadir untuk membantu anda dalam menemukan informasi lokasi, profile, peta, dan rating lokasi wisata dan tempat umum populer di kota Medan.' name='description'/>
	<meta content='jalan di medan, cari lokasi, tempat wisata, tempat umum, fasilitas umum, kota medan, peta medan, wisata medan, jalan medan' name='keywords'/>
    <meta name="author" content="Bambang - Deja - Febryco - Javent">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
	
    <!-- the styles -->

    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/template.css">   
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/style1.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/home2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/post-style.css" /> 

    <link rel="shortcut icon" href="<?php echo $baseUrl;?>/image/favicon.ico">

<script type="text/jscript">
$(function() {
    var button = $('#loginButton');
    var box = $('#loginBox');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(login) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login) {
        if(!($(login.target).parent('#loginButton').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});
$(function() {
   
        var menu_ul = $('.menu > li > ul'),
               menu_a  = $('.menu > li > a');
       
        menu_ul.hide();
   
        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });
   
    });
	
</script>

  </head>

<body>

    <?php include_once('header.php');?>