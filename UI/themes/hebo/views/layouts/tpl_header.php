<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Medanisasi - Sensasi Teknology Mencari Lokasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Simpson Moyo - Webapplicationthemes.com">
	
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
    
    <script type="text/javascript" src="<?php echo $baseUrl;?>/js/jquery.js"></script>

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
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    

  </head>

<body>
<div id="container">

<!-- Include the header bar -->
    <?php include_once('header.php');?>
<!-- /.container -->  
<!-- /#header -->