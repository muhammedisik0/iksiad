<!-- sections/news/news.php -->

<div id="newsCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php for ($i = 1; $i <= 9; $i += 3): ?>
            <div class="carousel-item <?php echo $i === 1 ? 'active' : ''; ?>">
                <div class="row">
                    <?php for ($j = $i; $j <= $i + 2; $j++): ?>
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
    <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>