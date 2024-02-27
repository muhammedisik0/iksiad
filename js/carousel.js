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

function preventDefaultForImageCarouselLinks() {
  document.querySelectorAll("#image-carousel a").forEach(function (link) {
    link.addEventListener("click", function (event) {
      event.preventDefault();
    });
  });
}
