<?php 

include './includes/header.php'; 

getLayout("shop__first", array(
    'shop__title' => 'Taschenbegleiter <br> Editions',
));

getLayout("shop__features", array(
   
    'left__description' => 'All our',
    'left__headline' => 'Taschenbegleiter <br> SO_20 Limited <br> Edition white',

    'right__description' => 'All our',
    'right__headline' => 'Inserts for the <br> Taschenbegleiter',
));

getLayout("shop__products", array(
    'products__card__name' => 'Taschenbegleiter S0 20',
    'products__card__price' => '164,00 €',
));

getLayout("shop__banner", array(
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





