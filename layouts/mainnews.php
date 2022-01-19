
<div class="mainnews">

<div class="mainnews-links">
    <a href="index.php">ROTERFADEN</a>
    <a href="index.php">ABOUT US</a>
    <a href="news.php">NEWS</a>
</div>

<div class="mainnews-title h1">
<?php echo $data["mainnews-title"]; ?>
</div>

<div class="mainnews__content">

        <div class="mainnews__content__article">

        <img src="<?php echo $data["mainnews-article-image"]; ?>">

        <div class="mainnews__content__article-title title">
        <?php echo $data["mainnews-article-title"]; ?>
        </div>

        <div class="mainnews__content__article-text text">
        <?php echo $data["mainnews-article-text"]; ?>
        </div>

        </div>
        
    </div>
</div>