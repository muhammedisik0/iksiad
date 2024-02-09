document.addEventListener("DOMContentLoaded", function () {
  new Splide("#image-carousel").mount();

  var defaultLanguageOption = document.querySelector(
    ".language-option:first-child"
  );
  highlightClickedLanguageOption(defaultLanguageOption);

  var defaultNavItem = document.querySelector(".nav-item:first-child");
  highlightClickedNavItem(defaultNavItem);
});

function highlightClickedLanguageOption(element) {
  // Remove 'clicked' class from all options
  var options = document.getElementsByClassName("language-option");
  for (var i = 0; i < options.length; i++) {
    options[i].classList.remove("clicked");
  }

  // Add 'clicked' class to the clicked language option
  element.classList.add("clicked");
}

function highlightClickedNavItem(element) {
  // Remove 'clicked' class from all nav items
  var navItems = document.getElementsByClassName("nav-item");
  for (var i = 0; i < navItems.length; i++) {
    navItems[i].classList.remove("clicked");
  }

  // Add 'clicked' class to the clicked nav item
  element.classList.add("clicked");
}
