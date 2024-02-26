<div id="image-carousel" class="splide custom-px-10">
    <div class="splide__track">
        <ul class="splide__list">
            <?php for ($i = 0; $i < 9; $i++): ?>
                <li class="splide__slide">
                    <div class="card">
                        <a href="?page=home-page/sections/slider/contents/content" class="d-block w-100 mx-auto">
                            <img src="img/slidable-image.jpg" class="d-block w-100">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <h1>TRİOS 2023</h1>
                            <p style="font-size: 1.5rem;">
                                <strong>The standard Lorem Ipsum passage, used since the 1500s "Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit...
                                </strong>
                            </p>
                        </div>
                    </div>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</div>