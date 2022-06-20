let preloader = document.getElementById("preloader");
if (preloader) {
  window.addEventListener("load", () => {
    preloader.remove();
  });
}


window.addEventListener("load", () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  });



// $('.reviews').owlCarousel({
//     autoplay: true,
//     loop: true,
//     infinite:true,
//     nav: false,
//     ltr: true,
//     dots:false,
//     items: 3,
//     autoplayTimeout:4000,
// autoplayHoverPause:true,
//   });


