<?php 

include './includes/header.php'; 

getLayout("page-link", array(
    'page-link1' => 'About us',
    'page-link2' => 'Materials',
));

getLayout("maintitle", array(
    'maintitle' => 'How we make <br> things today matters',
));

getLayout("materials-intro", array(
    'intro-image' => './assets/images/materialsintro.jpg',
    'intro-subtitle' => 'By Juliana Crain, March 27st',

));

getLayout("materials-text", array(
    'text-handwrite' => "From our hands to yours. <br> A companion for life, needs <br> to be alive. That's why we <br> make it a certain way: <br> special.",

    'text-text' => ' <span class="underline-text"> We take our time in making one pocket companion, </span> 
    <br> because it s made to last and save you from needing new <br> purchases constantly.
    It s crafted by hand from high-quality <br> materials that come together in Germany. All parts of it,<br> from the leather, 
    wool or the linoleum on the outside, to the <br> steel of the clips are responsibly sourced. Wherever <br> possible, 
    we incorporate recycled materials. We are <br> committed to shaping our lives with intention and quality, <br>
    lowering our impact on the environment.',

));

getLayout("materials-video", array(
    'video' => './assets/images/materialsvideo.jpg',
    'video-text' => 'Founded in 2006, our products are handcrafted with <br> high-quality materials and great emphasis on sustainability and design.',

));


getLayout("materials-article", array(
    'article-image' => './assets/images/materialarticle.jpg',
    'article-title' => 'We take our time in making one pocket companion, because its made to last and save you from needing new purchases constantly. ',
    'article-text' => 'It s crafted by hand from high-quality materials that come together in Germany. All parts of it, from the leather, 
    wool or the linoleum on the outside, to the steel of the clips are responsibly sourced. Wherever possible, we incorporate recycled materials. 
    We are committed to shaping our lives with intention and quality, lowering our impact on the environment. 
    We take our time in making one pocket companion, because it s made to last and save you from needing new purchases constantly. 
    It s crafted by hand from high-quality materials that come together in Germany. All parts of it, from the leather, 
    wool or the linoleum on the outside, to the steel of the clips are responsibly sourced. Wherever possible, 
    we incorporate recycled materials. 
    We are committed to shaping our lives with intention and quality, lowering our impact on the environment.',

));

getLayout("discover", array(
    'discover-text' => 'To make notes, <br> of your ideas, <br> your work, your life.',
));


getLayout("stories-single", array(

    'story-image1' => './assets/images/stories2.jpg',
    'story-text1' => ' Our patented design system is based on high quality stainless steel clips. They can be opened and closed with ease.
     It’s simple, subtle and fits all kinds of formats, with no restrictions and nothing loose.',
   
));


getLayout("stories-single", array(
    "reverse" => true,
    'story-image1' => './assets/images/stories5.jpg',
    'story-text1' => ' Our patented design system is based on high quality stainless steel clips. They can be opened and closed with ease.
     It’s simple, subtle and fits all kinds of formats, with no restrictions and nothing loose.',
   
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



include './includes/footer.php';

?>

