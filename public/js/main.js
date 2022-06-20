let preloader = document.getElementById("preloader");
if (preloader) {
  window.addEventListener("load", () => {
    preloader.remove();
  });
}


$('#reviews').owlCarousel({
    autoplay: true,
    loop: true,
    infinite:true,
    nav: false,
    rtl: true,
    dots:false,
    items: 3,
    autoplayTimeout:4000,
autoplayHoverPause:true,
  });

