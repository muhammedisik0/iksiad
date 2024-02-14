<div id="gallery">
    <div class="container" id="image-grid">
        <div class="row">
            <?php
            $numberOfImages = 14;

            for ($i = 1; $i <= $numberOfImages; $i++) {
                echo '<div class="col-md-4 text-center mb-3">
                        <img src="img/iosb.jpg" class="img-fluid">
                      </div>';
            }
            ?>
        </div>
    </div>
</div>