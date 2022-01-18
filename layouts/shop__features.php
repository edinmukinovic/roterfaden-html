<div class="shop__features">

    <div class="features__title">
    THE FEATURES
    </div>

    <div class="features__gallery">

        <div class="features__gallery__left">
            <img src="./assets/images/shopgalleryleft.jpg">

            <div class="gallery__left__description">
            <?php echo $data["left__description"]; ?>
            </div>

            <div class="gallery__left__headline">
            <?php echo $data["left__headline"]; ?>
            </div>

            <but
            ton class="gallery__left__button">See them</button>
        </div>

        <div class="features__gallery__right">
            <img src="./assets/images/shopgalleryright.jpg">

            <div class="gallery__right__description">
            <?php echo $data["right__description"]; ?>
            </div>

            <div class="gallery__right__headline">
            <?php echo $data["right__headline"]; ?>
            </div>

            <button class="gallery__right__button">See them</button>
        </div>


        <img src="<?php echo $data["left__image"]; ?>" />

    </div>

</div>