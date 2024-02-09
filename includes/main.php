<main>
  <?php
  // Get the 'page' parameter from the URL
  $page = isset($_GET['page']) ? $_GET['page'] : 'news';

  // Define the path to the content file
  $contentFile = "pages/{$page}.php";

  // Check if the content file exists
  if (file_exists($contentFile)) {
    // Include the content file
    include $contentFile;
  } else {
    // If the file doesn't exist, show a default message
    echo '<div class="container">Section not found.</div>';
  }
  ?>
</main>