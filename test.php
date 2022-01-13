<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" media="screen and (min-width: 1150px)" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 1150px)" href="responsive.css">

        <title>Roterfaden - html</title>
        <link rel="icon" href="./assets/images/Stamps.svg">
    </head>



    <body>

<div id="myNav" class="overlay">
    <div class="row">
        <div class="column" >
            <div class="mobile__icon" onclick="closeNav()">
            
          </div>
      </div>
    
        <div class="column" >
                <div class="logo__img2">
                    <img src="./assets/images/StampsMobile.svg" alt="">
                </div>
        </div>
    
        <div class="column">
            <div class="cart__img2">
                <img src="./assets/images/Bag.svg">
            </div>
        
        </div>
      </div>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    

    <div class="overlay-content">
    <p class="top__left__text">100% made in Germany</p>

      <a href="#">Shop</a>
      <a href="#">About Us</a>
      <a href="#">Contact</a>

      <div class="overlay__language">
        <a href="index.html"><span style="color: #0F0E09; opacity: 0.4;">DE</span> EN</a>
    </div>

    <div class="overlay__number">
        <img src="./assets/images/Ellipse 3.png"> +49 681 - 95 90 502
    </div>

    </div>
  </div>


  <?php include './includes/header.php'; ?>

  <script>
    function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

    </body>

</html>