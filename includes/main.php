<main>
  <?php
  // Get the 'page' parameter from the URL
  $page = isset($_GET['page']) ? $_GET['page'] : 'home-page/home-page';

  // Define the path to the content file
  $contentFile = "pages/{$page}.php";

  // Check if the content file exists
  if (file_exists($contentFile)) {
    echo ($page !== 'home-page/home-page') ? '<div class="custom-px-10 py-3">' : '<div>';
    include $contentFile;
    echo '</div>';
  } else {
    echo '<div>Section not found.</div>';
  }
  ?>
</main>