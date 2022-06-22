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




$('.cards').owlCarousel({
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    loop: true,
    navText: [" ", " "],
    dots: false,
    rtl: true,
    margin: 20,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        800:{
            loop:true,
            items:3,
            nav:false
        },
        700:{
            loop:true,
            items:2,
            nav:false
        },
        1000:{
            loop:true,
            items:5,
            nav:true,
        }
    }
})


let show = () =>{
    document.getElementById('pop_up').classList.add('popup-active');

}
let hide = ()=>{
    document.getElementById('pop_up').classList.remove('popup-active');
}


