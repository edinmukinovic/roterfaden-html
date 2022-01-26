<div class="stories ">
   
    <div class="stories__article <?php if($data["reverse"]) {echo "stories--reverse "; } ?>">
        <div class="stories__article-image">
           <img src=" <?php echo $data["story-image1"]; ?>" alt="">
        </div>

        <div class="stories__article-story--text <?php if($data["reverse"]) {echo "text--reverse "; } ?>">
            <div class="stories__article-text h3-bold">
            <?php echo $data["story-text1"]; ?>
            </div>
        </div>
    </div>


</div>