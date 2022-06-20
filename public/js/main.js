let preloader = document.getElementById("preloader");
if (preloader) {
  window.addEventListener("load", () => {
    preloader.remove();
  });
}

// window.addEventListener("load", () => {
//     AOS.init({
//       duration: 1000,
//       easing: "ease-in-out",
//       once: true,
//       mirror: false,
//     });
//   });


  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    loop: true,
    coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 1,
    modifier: 200,
    slideShadows : true,
    },
    pagination: {
    el: '.swiper-pagination',
    },
});
