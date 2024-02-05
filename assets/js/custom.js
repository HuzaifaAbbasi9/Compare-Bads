$(document).ready(function () {
    function getVals() {
        var parent = this.parentNode;
        var slides = parent.getElementsByTagName("input");
        var slide1 = parseFloat(slides[0].value);
        var slide2 = parseFloat(slides[1].value);
        var slide3 = $('.range-slider-two').find('input:first-child').val();
        var slide4 = $('.range-slider-two').find('input:nth-child(2)').val();
        if (slide1 > slide2) {
            var tmp = slide2;
            slide2 = slide1;
            slide1 = tmp;
        }
        var displayElement = document.querySelector(".rangeValues");
        displayElement.innerHTML = "£" + slide1 + " to £ " + slide2 + "k";
    }

    window.onload = function () {
        // Initialize Sliders
        var sliderSections = document.getElementsByClassName("range-slider");
        for (var x = 0; x < sliderSections.length; x++) {
            var sliders = sliderSections[x].getElementsByTagName("input");
            for (var y = 0; y < sliders.length; y++) {
                if (sliders[y].type === "range") {
                    sliders[y].oninput = getVals;
                    // Manually trigger event first time to display values
                    sliders[y].oninput();
                }
            }
        }
    }
    $('.filter-btn').click(function (e) {
        e.preventDefault();
        var target = $(this).attr('data-target');
        if (target == '#Mattress') {
            $('.home-filter-search-btn').attr('href', 'mattress.php')
        } else {
            $('.home-filter-search-btn').attr('href', 'beds.php')
        }
        $('.filter-content-inner').hide();
        $(target).show();
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
    })
    $('.custom-select-arrow').click(function () {
        $(this).toggleClass('is-focus');
    });
    $('.forget-link').click(function (e) {
        e.preventDefault();
        $('#login').fadeOut();
        $('#forget-pass').delay(350).fadeIn();
    });
    $('.login-form-link').click(function (e) {
        e.preventDefault();
        $('#login').fadeIn();
        $('#forget-pass').delay(350).fadeOut();
    });
    $('.order-details-link').click(function (e) {
        e.preventDefault();
        $('#order-tab').addClass('order-details');
    });
    $('.account-nav-link').click(function (e) {
        e.preventDefault();
        $('#order-tab').removeClass('order-details');
    });
    $('.edit-address').click(function (e) {
        e.preventDefault();
        $('.address-details').addClass('d-none');
        $(this).addClass('d-none');
        $('.address-form').removeClass('d-none');
    });
    $('.address-form-submit').click(function (e) {
        e.preventDefault();
        $('.address-form').addClass('d-none');
        $('.edit-address').removeClass('d-none');
        $('.address-details').removeClass('d-none');
    });
    $('.btn-remove').click(function (e) {
        e.preventDefault();
        $(this).parents('.product').remove();
    });
    $('.custom-select-arrow').focusout(function () {
        $(this).removeClass('is-focus');
    });
})