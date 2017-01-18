<?php 

?> 

<html <?php language_attributes(); ?>  style="margin: 0; padding: 0; margin-top: 0!important;"> 

<head>
    <?php wp_head(); ?> 
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="/coral-reef/wp-content/themes/coral-alliance/style.css">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script>

  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 2000);
          return false;
        }
      }
    });
  });
	
</script>
    
    <script src="https://use.typekit.net/ykt2wvp.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
    
    <link href="https://fonts.googleapis.com/css?family=Heebo:500,700,900|Open+Sans:300,400,600" rel="stylesheet">
    
    </head>
    
    
<body style="margin: 0; padding: 0;">
    <header class="hero">
    <img src="http://pandoras-chest.local/coral-reef/wp-content/themes/coral-alliance/images/logo.png" class="logo">
    
    <img src="http://pandoras-chest.local/coral-reef/wp-content/themes/coral-alliance/images/header-title.png" class="hero-text">
        
        <p>2015 is our year to show the world that we will stand up for this great natural wonder</p>
        
        <a href="#form" class="button button-primary huge">SIGN THE PETITION</a>
        
    </header>
