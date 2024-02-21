<div>
    <h1>Haberler</h1>

    <div id="newsCarousel" class="carousel slide">
        <div class="carousel-inner custom-px-10">
            <?php for ($i = 0; $i < 8; $i += 3): ?>
                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                    <div class="row">
                        <?php for ($j = $i; $j <= $i + 2 && $j < 8; $j++): ?>
                            <div class="col-md-4 py-3">
                                <div class="card">
                                    <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="News Image">
                                    <div class="card-body">
                                        <h5 class="card-title">Sample News Title
                                            <?php echo $j; ?>
                                        </h5>
                                        <p class="card-text">
                                            This is a sample news description. It can contain some information about the news or
                                            event.
                                            It can span multiple lines to provide more details.
                                        </p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>