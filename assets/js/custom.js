// *******************latest carousel***********************

var Lowl = $("#owl-news");
Lowl.owlCarousel({
    //   items: 5,
    items: 3, //10 items above 1000px browser width
    itemsDesktop: [1000, 2], //5 items between 1000px and 901px
    itemsDesktopSmall: [991, 2], // 3 items betweem 900px and 601px
    itemsTablet: [600, 2], //2 items between 600 and 0;
    //  itemsMobile : false , // itemsMobile disabled - inherit from itemsTablet option
    dots: false,
    stagePadding: Number,
    //stagePadding: 50,
    loop: false,
    margin: 30,
    rtl: true,
    pagination: false,
    //     responsiveClass:true,
    //    responsive : {
    //     // breakpoint from 0 up
    //     0 : {
    //       items : 1
    //     },
    //     // breakpoint from 480 up
    //     480 : {
    //       items : 2
    //     },
    //     // breakpoint from 992 up
    //     992 : {
    //        items : 3
    //     }
    // }
})
$(".latest-item-nav-next").click(function () {

    Lowl.trigger('owl.next');
});
$(".latest-item-nav-prev").click(function () {
    Lowl.trigger('owl.prev');
});
Lowl.trigger('owl.play', false);


$(document).ready(function () {
    $('.navbar-toggler').click(function () {
        $('.navbar-menu').toggleClass('active')
        $('.navbar-toggler').toggleClass('cross')
    })
})