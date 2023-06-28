window.onload = function () {
    setTimeout(function () { 
      AOS.init({
        once: true,
        duration: 800,
      }); 
  })
}
// Fecha o menu no mobile
document.querySelector(".menu-open").addEventListener('click', function (event) {
    document.querySelector('.aside_menu').classList.add('active');
});

// Fecha o menu no mobile
document.querySelector(".aside_menu_content_close").addEventListener('click', function (event) {
    document.querySelector('.menu-open').classList.remove('active');
    document.querySelector('.aside_menu').classList.remove('active');
});

for (var x of document.querySelectorAll('.splide.splide_popular')) {
    var splide = new Splide(x, {
        type: 'loop', 
        perPage: 5,
    });
    splide.mount();
    x.style.display = 'inherit';
}

for (var x of document.querySelectorAll('.splide.splide_dashboard')) {
    var splide = new Splide(x, {
        type: 'loop', 
        perPage:5,
    });
    splide.mount();
    x.style.display = 'inherit';
}
