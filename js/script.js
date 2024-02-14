document.addEventListener("DOMContentLoaded", function () {
  new Splide("#image-carousel").mount();
  highlightHomePageNavEl();
  highlightFlag();
});

highlightNavElements();
highlightCorporateNavEl();
highlightIndustriesNavEl();
selectFlag();

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
