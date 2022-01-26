<div class="gallery">
    <div class="gallery__first">
        <div class="gallery__first-text h3">
            <?php echo $data["text_first"]; ?>
        </div>

        <div class="gallery__first-signature handwrite">
            <?php echo $data["signature_first"]; ?>
        </div>

        <div class="gallery__first-image">
            <img src="<?php echo $data["image_first"]; ?>">
        </div>
    </div>

    <div class="gallery__second">

        <div class="gallery__second-image">
            <img src="<?php echo $data["image_second"]; ?>">
        </div>

        <div class="gallery__second-signature handwrite">
        <?php echo $data["signature_second"]; ?>
        </div>

        <div class="gallery__second-text h3">
        <?php echo $data["text_second"]; ?>
        </div>

    </div>
</div>