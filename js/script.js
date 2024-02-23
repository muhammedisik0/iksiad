document.addEventListener("DOMContentLoaded", function () {
  mountImageCarousel();
  mountNewsCarousel();
  handleReadMoreClicks();
  highlightHomePageNavEl();
  highlightFlag();

  window.addEventListener('popstate', function (event) {
    // Check if there is a state object
    if (event.state && event.state.newsId) {
      // If there is a newsId in the state, load the news details
      loadNewsDetails(event.state.newsId);
    } else {
      // If there is no state or newsId, load the default content (home page)
    }
  });
});

highlightNavElements();
highlightCorporateNavEl();
highlightIndustriesNavEl();
selectFlag();

function mountImageCarousel() {
  const imageCarousel = new Splide("#image-carousel");
  imageCarousel.mount();
}

function mountNewsCarousel() {
  const newsCarousel = new Splide("#news-carousel", {
    perPage: 3,
    breakpoints: { 640: { perPage: 1 } },
  });
  newsCarousel.mount();
}

function handleReadMoreClicks() {
  const readMoreButtons = document.querySelectorAll(
    "#news-carousel .read-more-button"
  );

  readMoreButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      var newsId = button.id;
      loadNewsDetails(newsId);
      window.history.pushState(
        { newsId: newsId },
        "",
        "index.php/news/" + newsId
      );
    });
  });
}

function loadNewsDetails(newsId) {
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

function highlightHomePageNavEl() {
  const homePageNavEl = document.getElementById("home-page");

  if (window.location.href === "http://localhost/iksiad/index.php") {
    homePageNavEl.classList.add("active");
    homePageNavEl.setAttribute("aria-current", "page");
  }
}

function highlightNavElements() {
  document.querySelectorAll(".nav-link").forEach((link) => {
    if (window.location.href === link.href) {
      link.classList.add("active");
      link.setAttribute("aria-current", "page");
      highlightFlag();
    }
  });
}

function highlightCorporateNavEl() {
  const corporateNavEl = document.getElementById("corporate");

  document
    .querySelectorAll(".dropdown-menu .corporate")
    .forEach(function (link) {
      if (window.location.href === link.href) {
        corporateNavEl.classList.add("active");
        corporateNavEl.setAttribute("aria-current", "page");
        highlightFlag();
      }
    });
}

function highlightIndustriesNavEl() {
  const industriesNavEl = document.getElementById("industries");

  document
    .querySelectorAll(".dropdown-menu .industries")
    .forEach(function (link) {
      if (window.location.href === link.href) {
        industriesNavEl.classList.add("active");
        industriesNavEl.setAttribute("aria-current", "page");
        highlightFlag();
      }
    });
}

function selectFlag() {
  const languageFlags = document.querySelectorAll(".language-flag");

  languageFlags.forEach((flag) =>
    flag.addEventListener("click", () => {
      languageFlags.forEach((f) => f.classList.remove("selected"));
      flag.classList.add("selected");
      setLanguage(flag.id);
    })
  );
}

function highlightFlag() {
  const selectedLanguage = getLanguage() || "tr-flag";
  const selectedFlag = document.getElementById(selectedLanguage);
  selectedFlag.classList.add("selected");
}

function getLanguage() {
  return localStorage.getItem("selectedLanguage");
}

function setLanguage(language) {
  localStorage.setItem("selectedLanguage", language);
}
