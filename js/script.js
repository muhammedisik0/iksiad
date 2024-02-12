document.addEventListener("DOMContentLoaded", function () {
  new Splide("#image-carousel").mount();
});

const languageFlags = document.querySelectorAll(".language-flag");

languageFlags.forEach(function (element) {
  element.addEventListener("click", function () {
    languageFlags.forEach(function (flag) {
      flag.classList.remove("clicked");
    });
    element.classList.add("clicked");
  });
});
