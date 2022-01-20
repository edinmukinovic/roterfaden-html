<?php 

include './includes/header.php'; 

getLayout("page-link", array(
    'page-link1' => 'SHOP',
    'page-link2' => 'Taschenbegleiter Editions',
));

getLayout("shop__first", array(
    'shop__title' => 'Taschenbegleiter <br> Editions',
));

getLayout("shop__features", array(
    'featuresimageleft' => "./assets/images/shopgalleryleft.jpg",
    'left__description' => 'All our',
    'left__headline' => 'Taschenbegleiter <br> SO_20 Limited <br> Edition white',

    'featuresimageright' => "./assets/images/shopgalleryright.jpg",
    'right__description' => 'All our',
    'right__headline' => 'Inserts for the <br> Taschenbegleiter',
));

getLayout("shop__products", array(
    'products__card__name' => 'Taschenbegleiter S0 20',
    'products__card__price' => '164,00 €',
));

getLayout("shop__banner", array(
    'handwrite-image' => "./assets/images/Group 466.svg",
    'handwrite-text' => "We take our time in crafting one pocket companion, 
    because it's made to last and be with you on a lifelong journey. 
    It's crafted by hand from high-quality materials in our manufactory in Germany.",


    'shop__banner__right__text' => ' Founded in 2006, our products are handcrafted with <br> high-quality materials and great emphasis on sustainability and design.',
    'image' => "./assets/images/shopbanner.jpg"
));

getLayout("shop__suggestion", array(
    'card__name' => 'Taschenbegleiter S0 20',
    'card__price' => 'FROM 164,00 €',
));

getLayout("show__more", array());

include './includes/footer.php';

?>





