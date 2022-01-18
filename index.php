<?php 
include("includes/header.php");


getLayout("intro", array(
    'intro__image' => './assets/images/BG VIDEO.jpg',
    'headline' => 'Enduring products that help you hold on to everything you want.',
    'intro__description' => 'Thoughtful, versatile, sustainable design 100% made in Germany.',
    'intro__signature' => '*For life, work, <br> chaos & routine',
));

getLayout("gallery", array(
    'text_first' => 'Founded in 2006, our products are <br> handcrafted with high-quality materials <br> and great <span class="underline">emphasis on durability</span> and <br> design.',
    'signature_first' => 'Your companion. For <br> always, everywhere <br> and everything.',
    'image_first' => './assets/images/7f2f6172148993.png',

    'text_second' => 'Our <a><span class="underline">Taschenbegleiter</span></a> is a unique, open organizer <br> for maximum freedom. It keeps the things that <br> matter to you.',
    'signature_second' => 'Pocket companion',
    'image_second' => './assets/images/654f2f6172148993.png',
    
));

getLayout("label", array(
    'text' => 'Our Range',
));

getLayout("banner", array(
    'banner__first-image' => './assets/images/img3.png',
    'banner__first-signature' => 'ALL OUR',
    'banner__first-text' => 'Taschenbegleiter<br>Editions',
    
    'banner__second-image' => './assets/images/img4.png',
    'banner__second-signature' => 'OUR RANGE OF',
    'banner__second-text' => 'Inserts for the <br> Taschenbegleiter',
    
)); 

getLayout("explore", array(
    'explore-text' => 'Explore other items in <span class="explore__underline"> our shop',
    'explore__signature' => 'Every journey <br> needs a companion.',
));

getLayout("discover", array(
    'discover-text' => 'Discover our <br> customers stories',
));

getLayout("gallery2", array(
    'gallery2__first-image' => './assets/images/gallery22.png',
    'gallery2__first-title' => 'Short Visits: Some of our Customers',
    'gallery2__first-text' => '  Our dear and valued customers use our TASCHENBEGLEITER for the things that matter to them, 
    sometimes in ways we hadn’t even considered. Our series of short visits portrays the different 
    people using TASCHENBEGLEITER and their companions. In each episode, we take a closer 
    look at work and ways of organisation.',

    'gallery2__second-image' => './assets/images/gallery21.png',
    'gallery2__second-title' => ' Maximum freedom',
    'gallery2__second-text' => 'It grows with every thing you put inside of it. And every little bit, every moment that it lives through with you, makes it more yours.',

    
));


include("includes/footer.php");
?>