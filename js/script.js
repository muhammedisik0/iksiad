document.addEventListener("DOMContentLoaded", function () {
  new Splide("#image-carousel").mount();

  const navLinks = document.querySelectorAll(".nav-link");
  if (window.location.href === "http://localhost/iksiad/index.php") {
    navLinks[0].classList.add("active");
    navLinks[0].setAttribute("aria-current", "page");
  }
});

document.querySelectorAll(".language-flag").forEach(function (element) {
  element.addEventListener("click", function () {
    languageFlags.forEach(function (flag) {
      flag.classList.remove("clicked");
    });
    element.classList.add("clicked");
  });
});

document.querySelectorAll(".nav-link").forEach((link) => {
  if (window.location.href === link.href) {
    link.classList.add("active");
    link.setAttribute("aria-current", "page");
  }
});