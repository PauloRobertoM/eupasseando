(function($, window) {
    $('#owl-vitrine').owlCarousel({
        loop: false,
        autoplay: false,
        margin: 0,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('#owl-comentarios').owlCarousel({
        loop: false,
        autoplay: false,
        margin: 0,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $( document ).ready(function(){
        $('.now').css("width", function(){
            return $(this).attr("data")
        })
    });
    const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

    let countDown = new Date('May 31, 2018 16:00:00').getTime(),
    x = setInterval(function() {

        let now = new Date().getTime(),
        distance = countDown - now;

        // document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute));
        // document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second)
    }, second)
    $(".timer").waypoint(function(){
        $(this).countTo();
    },{
        triggerOnce: true,
        offset: "bottom-in-view"
    });
})(jQuery, window);