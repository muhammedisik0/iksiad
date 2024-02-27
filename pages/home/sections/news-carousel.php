<div>
    <h1>Haberler</h1>

    <div id="news-carousel" class="splide custom-px-10">
        <div class="splide__track pb-5">
            <ul class="splide__list">
                <?php
                // Connect to the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "news_db";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch news details from the database
                $result = $conn->query("SELECT * FROM news");

                while ($row = $result->fetch_assoc()):
                    ?>
                    <li class="splide__slide pe-2">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="News Image">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">
                                    <?php echo $row['title']; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo substr($row['content'], 0, 100); ?>...
                                    <!-- Show only the first 100 characters -->
                                </p>

                                <div class="mt-auto">
                                    <button class="btn btn-primary read-more-button"
                                        onclick="window.location.href='news?id=<?php echo $row['id']; ?>'">
                                        Devamını Oku
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div>