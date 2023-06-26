
for (var x of document.querySelectorAll('.splide.splide_popular')) {
    var splide = new Splide(x, {
        type: 'loop',
        focus: 'center',
        perPage: 6,
        gap: 25,
        autoplay: 7000,
        
    });
    splide.mount();
    x.style.display = 'inherit';
}
