<div id="image-carousel" class="splide text-center mb-3">
    <div class="splide__track">
        <ul class="splide__list">
            <?php
            for ($i = 1; $i <= 7; $i++) {
                ?>
                <li class="splide__slide">
                    <a href="?page=home-page/news/contents/news">
                        <img src="img/news-image.jpg" />
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>