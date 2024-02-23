<div>
    <h1>Haberler</h1>

    <div id="news-carousel" class="splide custom-px-10">
        <div class="splide__track pb-5">
            <ul class="splide__list">
                <?php for ($i = 0; $i < 9; $i++): ?>
                    <li class="splide__slide pe-2">
                        <div class="card">
                            <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title">Haber
                                    <?php echo $i + 1 ?>
                                </h5>
                                <p class="card-text">
                                    This is a sample news description. It can contain some information about the news or
                                    event. It can span multiple lines to provide more details.
                                </p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>