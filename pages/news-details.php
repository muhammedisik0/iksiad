<?php
// Get the article ID from the URL
$articleID = isset($_GET['id']) ? $_GET['id'] : 1; // Default to 1 if not provided

// Connect to the database (replace these details with your actual database credentials)
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
$sql = "SELECT * FROM news WHERE id = $articleID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $articleTitle = $row['title'];
    $articleContent = $row['content'];
} else {
    $articleTitle = 'Article Not Found';
    $articleContent = 'Content not available.';
}

// Close the database connection
$conn->close();
?>

<div>
    <h2>
        <?php echo $articleTitle; ?>
    </h2>
    <p>
        <?php echo $articleContent; ?>
    </p>
</div>