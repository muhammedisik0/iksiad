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
