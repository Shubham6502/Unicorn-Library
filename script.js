        
$(function() {
    // Initialize swiper when document ready
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If you need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // If you need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    })
});
    