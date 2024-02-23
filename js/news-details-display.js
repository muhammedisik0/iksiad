function handleReadMoreClicks() {
  const readMoreButtons = document.querySelectorAll(
    "#news-carousel .read-more-button"
  );

  readMoreButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      var newsId = button.id;
      displayNewsDetails(newsId);
      unhighlightHomePageNavEl();
      window.history.pushState(
        { newsId: newsId },
        "",
        "index.php/news/" + newsId
      );
    });
  });
}

function displayNewsDetails(newsId) {
  // Static content for demonstration
  var title = "Haber " + newsId;
  var content =
    "Section 1.10.32 of de Finibus Bonorum et Malorum, written by Cicero in 45 BC Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?";

  // Create elements for title and description
  var titleElement = document.createElement("h2");
  titleElement.textContent = title;

  var contentElement = document.createElement("p");
  contentElement.textContent = content + content + content + content;

  // Create a container div for the elements
  var containerDiv = document.createElement("div");
  containerDiv.classList.add("custom-px-10", "py-3");

  // Append title and description elements to the container
  containerDiv.appendChild(titleElement);
  containerDiv.appendChild(contentElement);

  // Get the main tag and replace its content with the container
  var mainElement = document.querySelector("main");
  mainElement.innerHTML = ""; // Clear existing content
  mainElement.appendChild(containerDiv);
}
