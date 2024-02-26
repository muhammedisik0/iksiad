<?php
// Get the article ID from the URL
$articleID = isset($_GET['id']) ? $_GET['id'] : 1; // Default to 1 if not provided

// Fetch and display news details based on the article ID
$articleTitle = "Haber " . $articleID; // You can replace this with actual article data
$articleContent = "This is the content of the article with ID " . $articleID;
?>

<div>
    <h2>
        <?php echo $articleTitle; ?>
    </h2>
    <p>
        <?php echo $articleContent; ?>
    </p>
</div>