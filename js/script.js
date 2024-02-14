document.addEventListener("DOMContentLoaded", function () {
  new Splide("#image-carousel").mount();

  const homePageNavEl = document.getElementById("home-page");
  if (window.location.href === "http://localhost/iksiad/index.php") {
    homePageNavEl.classList.add("active");
    homePageNavEl.setAttribute("aria-current", "page");
  }

  const trFlag = document.getElementById("tr-flag");
  trFlag.classList.add("clicked");
});

const languageFlags = document.querySelectorAll(".language-flag");
languageFlags.forEach((flag) =>
  flag.addEventListener("click", () => {
    languageFlags.forEach((f) => f.classList.remove("clicked"));
    flag.classList.add("clicked");
  })
);

document.querySelectorAll(".nav-link").forEach((link) => {
  if (window.location.href === link.href) {
    link.classList.add("active");
    link.setAttribute("aria-current", "page");
  }
});

const corporateNavEl = document.getElementById("corporate");
document.querySelectorAll(".dropdown-menu .corporate").forEach(function (link) {
  if (window.location.href === link.href) {
    corporateNavEl.classList.add("active");
    corporateNavEl.setAttribute("aria-current", "page");
  }
});

const industriesNavEl = document.getElementById("industries");
document
  .querySelectorAll(".dropdown-menu .industries")
  .forEach(function (link) {
    if (window.location.href === link.href) {
      industriesNavEl.classList.add("active");
      industriesNavEl.setAttribute("aria-current", "page");
    }
  });
