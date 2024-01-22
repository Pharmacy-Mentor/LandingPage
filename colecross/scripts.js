<!-- Initialize Owl Carousel -->
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 5000, // Set the autoplay interval in milliseconds
        nav: true, // Show navigation arrows
        navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"], // Custom navigation icons
        // dots: true, // Show pagination dots
        responsive: {
            768: {
                items: 2  // Display 2 items on screens larger than 768px
            },
            992: {
                items: 3  // Display 3 items on screens larger than 992px
            }
        }
    });
});