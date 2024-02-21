<div id="imageCarousel" class="carousel slide">
    <div class="carousel-indicators">
        <?php for ($i = 0; $i < 12; $i++): ?>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="<?php echo $i; ?>" <?php echo $i === 0 ? 'class="active"' : ''; ?> aria-label="Slide <?php echo $i + 1; ?>"></button>
        <?php endfor; ?>
    </div>
    <div class="carousel-inner">
        <?php for ($i = 0; $i < 12; $i++): ?>
            <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                <a href="?page=home-page/sections/slider/contents/content" class="d-block w-50 mx-auto">
                    <img src="img/iosb.jpg" class="d-block w-100" alt="Image <?php echo $i + 1; ?>">
                </a>
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