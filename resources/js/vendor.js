window.$ = window.jQuery = require('jquery');
window.AOS = require('aos');

window.addEventListener('load', () => {
    AOS.init({
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        duration: 1200, // values from 0 to 3000, with step 50ms
        easing: 'ease-in-out', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
    });
});

var header = $('.header_obj');
var win = $(window);

win.on('scroll', function() {
    if($(win).scrollTop() <= 40){
        header.removeClass('active_scroll');
    } else {
        header.addClass('active_scroll');
    }
});