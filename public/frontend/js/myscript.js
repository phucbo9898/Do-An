$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        margin:15,
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        autoWidthL: true,
        items : 5,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1
            },
            // breakpoint from 480 up
            480 : {
                items:2
            },
            // breakpoint from 768 up
            768 : {
                items:4
            },
            1024: {
                items:5
            }
        },
        nav:true,
        autoHeight:true
        //nav:true,
        //dots: false
    })
});