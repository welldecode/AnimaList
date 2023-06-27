
for (var x of document.querySelectorAll('.splide.splide_popular')) {
    var splide = new Splide(x, {
        type: 'loop', 
        perPage: 6,
    });
    splide.mount();
    x.style.display = 'inherit';
}

for (var x of document.querySelectorAll('.splide.splide_dashboard')) {
    var splide = new Splide(x, {
        type: 'loop', 
        perPage: 4,
    });
    splide.mount();
    x.style.display = 'inherit';
}
