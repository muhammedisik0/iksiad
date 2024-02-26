<main>
  <?php
  // Get the 'page' parameter from the URL
  $page = isset($_GET['page']) ? $_GET['page'] : 'home/home';

  // Check if the page is the home page
  $isHomePage = ($page === 'home/home');

  // If it's not the home page, display content inside a div with padding
  if (!$isHomePage) {
    echo '<div class="custom-px-10 py-3">';
  }

  // Switch statement to handle different static pages
  switch ($page) {
    case 'home/home':
      include 'pages/home/home.php';
      break;
    case 'corporate/about':
      include 'pages/corporate/about.php';
      break;
    case 'corporate/chairman':
      include 'pages/corporate/chairman.php';
      break;
    case 'corporate/council':
      include 'pages/corporate/council.php';
      break;
    case 'corporate/members':
      include 'pages/corporate/members.php';
      break;
    case 'industries/construction-machinery':
      include 'pages/industries/construction-machinery.php';
      break;
    case 'industries/electrical-electronic':
      include 'pages/industries/electrical-electronic.php';
      break;
    case 'industries/textile-leather':
      include 'pages/industries/textile-leather.php';
      break;
    case 'activities':
      include 'pages/activities.php';
      break;
    case 'events':
      include 'pages/events.php';
      break;
    case 'gallery':
      include 'pages/gallery.php';
      break;
    case 'contact':
      include 'pages/contact.php';
      break;
    default:
      include 'pages/home/home.php';
      break;
  }

  // If it's not the home page, close the div
  if (!$isHomePage) {
    echo '</div>';
  }
  ?>


</main>