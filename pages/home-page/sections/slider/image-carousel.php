<div id="imageCarousel" class="carousel slide">
    <div class="carousel-indicators d-none d-md-block text-center">
        <?php for ($i = 0; $i < 12; $i++): ?>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="<?php echo $i; ?>" <?php echo $i === 0 ? 'class="active"' : ''; ?> aria-label="Slide <?php echo $i + 1; ?>"></button>
        <?php endfor; ?>
    </div>

    <div class="carousel-inner custom-px-10">
        <?php for ($i = 0; $i < 12; $i++): ?>
            <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                <a href="?page=home-page/sections/slider/contents/content" class="d-block w-100 mx-auto">
                    <img src="img/slidable-image.jpg" class="d-block w-100" alt="Image <?php echo $i + 1; ?>">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h1>TRİOS 2023</h1>
                    <p style="font-size: 1.5rem;">
                        <strong>The standard Lorem Ipsum passage, used since the 1500s "Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit...</strong>
                    </p>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>