<?php
$articleId = $_GET['id'];

// Static news details for demonstration purposes
$newsDetails = [
    1 => [
        'title' => 'Sample News Title 1',
        'content' => 'This is the content of sample news article 1. It can contain some information about the news or event. It can span multiple lines to provide more details.',
    ],
    2 => [
        'title' => 'Sample News Title 2',
        'content' => 'This is the content of sample news article 2. It can contain some information about the news or event. It can span multiple lines to provide more details.',
    ],
    // Add more entries as needed
];

// Display the static news details
if (isset($newsDetails[$articleId])) {
    $article = $newsDetails[$articleId];
    ?>

    <div>
        <h1><?php echo $article['title']; ?></h1>
        <p><?php echo $article['content']; ?></p>
    </div>

<?php } else { ?>
    <p>Article not found</p>
<?php } ?>
