jQuery(function ($) {

        //project slide
        $('.sale-slider').owlCarousel({
            loop:true,
            autoWidth:false,
            autoplay: true,
            items:3,
            dots: false,
            margin: 20,
            nav: true,
            navText: ["<img src='images/prev.png'>","<img src='images/next.png'>"],
            responsive:{
                0:{
                    items:1,
                    center:true
                },
                480:{
                    items:2
                },
                678:{
                    items:2
                },
                960:{
                    items:3
                }
            }
        });


    $(function () {
        $('.action-search').on('click',function(){
            $(this).closest('.header-right').find('.field-search').toggleClass("active");
        });
    });
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $("header").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("header").removeClass("active");
        }
    });

});