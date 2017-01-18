<?php

/**
 * Template Name: Home
 */

get_header()?>

<article class="grid-examples grid-container top section-1">

    <h3 style="padding-top: 50px; margin-top: 0;  text-align: center; color:#fff;">WE NEED TO ACT NOW:</h3>
    
    <h1>For 200 million years the reef has survived as an intricate ecosystem. Today, we’re on the brink of losing it forever.</h1>
    <p><a href="#form" class="icon icon-down-open"></a></p>
</article>

<article class="grid-examples grid-container drivers" style="padding: 50px 0 0;">
    
<div class="box -b2" style="background: none; border: none;">
    <h2>Subheading</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
    
    </div>
    
    <div class="box -b2" style="background: none; border: none;">
    <h2>Subheading</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
    </div>
    
    <div class="box -b2" style="background: none; border: none;">
    <h2>Subheading</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
    </div>
    
</article>

    <article class="grid-examples grid-container petition" style="padding: 50px 0 0;" >
        <a name="form"></a>
        <h1 style="text-align: center;">BE A HERO,<br />ADD YOUR NAME</h1>
        <form action="./wp-content/themes/coral-alliance/petition.php" name="petition" id="petition" enctype="text/plain"  method="POST" style="max-width: 500px; margin: 0 auto;">
        <input type="text" name="name" placeholder="Full Name" value="" style="width: 100%;">
        <input type="email" name="email" placeholder="Email Address" value="" style="width: 100%;">
        <input type="number" name="postcode" placeholder="Postcode" value="" style="width: 100%;">
        <input type="submit" id="submit" name="submit" value="SIGN THE PETITION" class="button-primary huge" style="width: 100%;">
        </form>
</article>

<article class="grid-examples grid-container activity" style="padding: 50px 0 0;">
    <div class="box -b14" style="background: none; border: none;">
    <div class="box -b2">
        <h5>3 minutes ago</h5>
        <p>Tom joined the reef defenders.</p>
    
    </div>
    <div class="box -b2">
        <h5>3 minutes ago</h5>
        <p>Sarah joined the reef defenders.</p>
    </div>
    <div class="box -b2">
        <h5>3 minutes ago</h5>
        <p>Jess joined the reef defenders.</p>
    </div>
    </div>
    <div class="box -b14" style="background: none; border: none;">
    <div class="box -b2">
        <h5>3 minutes ago</h5>
        <p>Tom joined the reef defenders.</p>
    </div>
    <div class="box -b2">
        <h5>3 minutes ago</h5>
        <p>Sarah joined the reef defenders.</p>
    </div>
    <div class="box -b2">
        <h5>3 minutes ago</h5>
        <p>Jess joined the reef defenders.</p>
    </div>
    </div>
</article>


<?php get_footer(); ?>