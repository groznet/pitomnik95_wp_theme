(function ($) {

    "use strict";

    $('.select').niceSelect();

    // RESPONSIVE MENU
    $('.responsive').on('click', function (e) {
        $('#mobile-menu').slideToggle();
    });

    // meanmenu
    $('#mobile-menu').meanmenu({
        meanMenuContainer: '.mobile-menu',
        meanScreenWidth: "992"
    });


    // menu toggle
    $(".main-menu li a").on('click', function () {
        if ($(window).width() < 700) {
            $("#mobile-menu").slideUp();
        }
    });

    // toggle2
    $('.coupon-click').on("click", function () {
        $('.coupon-form').slideToggle();
        $('.coupon-form').toggleClass('caupon-area')
    })


    //Header Search
    if ($('.search-toggle-btn').length) {
        $('.search-toggle-btn').on('click', function () {
            $('.cp-header-search-form').addClass('active');
        });
        $('.close-header-search').on('click', function () {
            $('.cp-header-search-form').removeClass('active');
        });
    }

    //right
    if ($('.right-menu-toggle-btn').length) {
        $('.right-menu-toggle-btn').on('click', function () {
            $('.header-right-menu-wrap').addClass('right-menu-active');
        });
        $('.right-menu-close').on('click', function () {
            $('.header-right-menu-wrap').removeClass('right-menu-active');
        });
        $('.all-close').on('click', function () {
            $('.header-right-menu-wrap').removeClass('right-menu-active');
        });
    }

    //  hover-active
    let items = document.querySelectorAll('.work-area .work-wrap .work-item');
    items.forEach(item => item.addEventListener('mouseenter', function () { handleHover(this, items) }))
    function handleHover(el) {
        items.forEach(item => {
            item.classList.remove('active')
            item.classList.add('item')
        })

        el.classList.add('active')
    }

    // sticky-header

    if ($("#header").length) {
        var header = document.getElementById("cp-header-sticky");
        var stickyPosition = header.offsetTop + header.offsetHeight;
        window.onscroll = function () {
            if (window.pageYOffset > stickyPosition) {
                header.classList.add("sticky");
                document.querySelectorAll('.page-wrap')[0].style.marginTop = header.offsetHeight + "px";
            } else {
                header.classList.remove("sticky");
                document.querySelectorAll('.page-wrap')[0].style.marginTop = "0px";
            }
        };
    }



    /*------------------------------------------
       = TEAM SECTION
   -------------------------------------------*/
    var singleMember = $('.social');
    singleMember.on('click', function () {
        $(this).toggleClass('active');
    });


    /*------------------------------------------
        = HIDE PRELOADER
    -------------------------------------------*/
    function preloader() {
        if ($('.preloader').length) {
            $('.preloader').delay(100).fadeOut(500, function () {

                //active wow
                wow.init();

            });
        }
    }


    /*------------------------------------------
        = WOW ANIMATION SETTING
    -------------------------------------------*/
    var wow = new WOW({
        boxClass: 'wow',      // default
        animateClass: 'animated', // default
        offset: 0,          // default
        mobile: true,       // default
        live: true        // default
    });



    /*------------------------------------------
       = BACK TO TOP BTN SETTING
   -------------------------------------------*/
    $("body").append("<a href='#' class='back-btn'><i class='icon-home'></i></a>");

    function toggleBackToTopBtn() {
        var amountScrolled = 1000;
        if ($(window).scrollTop() > amountScrolled) {
            $("a.back-btn").fadeIn("slow");
        } else {
            $("a.back-btn").fadeOut("slow");
        }
    }

    $(".back-btn").on("click", function () {
        $("html,body").animate({
            scrollTop: 0
        }, 700);
        return false;
    })

    // dc-hero-area slider background setting
    function sliderBgSetting() {
        if ($(".dc-hero-area-slider .slide").length) {
            $(".dc-hero-area-slider .slide").each(function () {
                var $this = $(this);
                var img = $this.find(".slider-bg").attr("src");

                $this.css({
                    backgroundImage: "url(" + img + ")",
                    backgroundSize: "cover",
                    backgroundPosition: "center center"
                })
            });
        }
    }


    //Setting dc-hero-area slider
    function dcheroareaSlider() {
        if ($(".dc-hero-area-slider").length) {
            $(".dc-hero-area-slider").slick({
                autoplay: true,
                autoplaySpeed: 10000,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                dots: true,
                fade: true,
                cssEase: 'linear',
            });
        }
    }

    //Active heor slider
    dcheroareaSlider();

    /*------------------------------------------
    project-active
    -------------------------------------------*/
    if ($(".project-active").length) {
        $(".project-active").owlCarousel({
            autoplay: true,
            smartSpeed: 2000,
            margin: 24,
            loop: true,
            items: 5,
            autoplayHoverPause: true,
            dots: true,
            arrows: false,
            center: true,
            stagePadding: 280,
            navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    center: false,
                    stagePadding: 0,
                },

                550: {
                    items: 2,
                    center: false,
                    stagePadding: 0,
                },

                767: {
                    items: 2,
                    center: false,
                    stagePadding: 0,
                },
                992: {
                    items: 3,
                    center: false,
                    stagePadding: 0,
                },

                1200: {
                    items: 3,
                    stagePadding: 180,
                },
                1399: {
                    items: 3
                }
            }
        });
    }
    if ($(".project-active-s2").length) {
        $(".project-active-s2").owlCarousel({
            autoplay: true,
            smartSpeed: 2000,
            margin: 24,
            loop: true,
            items: 5,
            autoplayHoverPause: true,
            dots: true,
            arrows: false,
            navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    center: false,
                },

                550: {
                    items: 2,
                    center: false,
                },

                767: {
                    items: 2,
                    center: false,
                },
                992: {
                    items: 3,
                    center: false,
                },

                1200: {
                    items: 3,
                },
                1399: {
                    items: 4
                }
            }
        });
    }

    /*------------------------------------------
       = testimonial-active
   -------------------------------------------*/
    if ($(".testimonial-active").length) {
        $(".testimonial-active").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            margin: 20,
            loop: true,
            autoplayHoverPause: true,
            dots: false,
            navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
            nav: false,
            loop: true,
            items: 2,

            responsive: {
                0: {
                    items: 1,
                },

                500: {
                    items: 1,
                },

                768: {
                    items: 1,
                },
                992: {
                    items: 2,
                },

                1200: {
                    items: 2,
                },

            }
        });
    }

    // testimonial-sider
    if ($(".testimonial-sider").length) {
        $(".testimonial-sider").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            margin: 20,
            loop: true,
            autoplayHoverPause: true,
            dots: false,
            nav: false,
            loop: true,
            items: 1,
        });
    }


    /*------------------------------------------
          = brand SLIDER
      -------------------------------------------*/
    if ($(".brand-slider").length) {
        $(".brand-slider").owlCarousel({
            autoplay: true,
            smartSpeed: 300,
            margin: 60,
            loop: true,
            autoplayHoverPause: true,
            dots: false,
            responsive: {
                0: {
                    items: 2
                },

                550: {
                    items: 3
                },

                992: {
                    items: 4
                },

                1200: {
                    items: 5
                }
            }
        });
    }

    /*------------------------------------------
           = team-active
       -------------------------------------------*/
    if ($(".team-active").length) {
        $(".team-active").owlCarousel({
            margin: 20,
            singleItem: true,
            loop: true,
            autoplayHoverPause: true,
            dots: true,
            navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
            nav: false,

            responsive: {
                0: {
                    items: 1,
                },

                500: {
                    items: 1,
                },

                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },

                1200: {
                    items: 4,
                },

            }
        });
    }
    /*------------------------------------------
           = team-active
       -------------------------------------------*/
    if ($(".team-active-s2").length) {
        $(".team-active-s2").owlCarousel({
            margin: 20,
            singleItem: true,
            loop: true,
            autoplayHoverPause: true,
            dots: false,
            navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
            nav: false,

            responsive: {
                0: {
                    items: 1,
                },

                500: {
                    items: 1,
                },

                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },

                1200: {
                    items: 4,
                },

            }
        });

        $(document).ready(function () {
            var owl = $('.team-active-s2');
            $('.customNextBtn').on('click', function () {
                owl.trigger('next.owl.carousel');
            });

            $('.customPrevBtn').on('click', function () {
                owl.trigger('prev.owl.carousel', [300]);
            });
        });
    }

    /*------------------------------------------
        = SHOP DETAILS PAGE PRODUCT SLIDER
    -------------------------------------------*/
    if ($(".dc-product-single-slider").length) {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            focusOnSelect: true,

            responsive: [
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 3,
                        infinite: true
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]

        });
    }


    /*-----------------------
       cart-plus-minus-button 
     -------------------------*/
    $(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() === "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });


    /*------------------------------------------
         = POPUP VIDEO
     -------------------------------------------*/
    if ($(".open-video").length) {
        $(".open-video").on("click", function () {
            $.fancybox({
                href: this.href,
                type: $(this).data("type"),
                'title': this.title,
                helpers: {
                    title: { type: 'inside' },
                    media: {}
                },

                beforeShow: function () {
                    $(".fancybox-wrap").addClass("portfolio-fancybox");
                }
            });
            return false
        });
    }


    /*------------------------------------------
      = FUNFACT
  -------------------------------------------*/
    if ($(".odometer").length) {
        $('.odometer').appear();
        $(document.body).on('appear', '.odometer', function (e) {
            var odo = $(".odometer");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    }



    /*------------------------------------------
        = MASONRY GALLERY SETTING
    -------------------------------------------*/
    function masonryGridSetting() {
        if ($('.masonry-gallery').length) {
            var $grid = $('.masonry-gallery').masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-item',
                percentPosition: true
            });

            $grid.imagesLoaded().progress(function () {
                $grid.masonry('layout');
            });
        }
    }
    masonryGridSetting();


    /*------------------------------------------
        = CONTACT FORM SUBMISSION
    -------------------------------------------*/
    if ($("#contact-form-mejor").length) {
        $("#contact-form-mejor").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },

                email: "required",

                phone: "required",

                subject: {
                    required: true
                }


            },

            messages: {
                name: "Please enter your name",
                email: "Please enter your email address",
                phone: "Please enter your phone number",
                subject: "Please select your contact subject"
            },

            submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: "mail-contact.php",
                    data: $(form).serialize(),
                    success: function () {
                        $("#loader").hide();
                        $("#success").slideDown("slow");
                        setTimeout(function () {
                            $("#success").slideUp("slow");
                        }, 3000);
                        form.reset();
                    },
                    error: function () {
                        $("#loader").hide();
                        $("#error").slideDown("slow");
                        setTimeout(function () {
                            $("#error").slideUp("slow");
                        }, 3000);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

        });
    }

    // pricing tab js

    $(document).ready(function () {
        $('#toggleButton').on('click', function () {
            var $tab1 = $('#tab1');
            var $tab2 = $('#tab2');
            if ($tab1.hasClass('active')) {
                $tab1.removeClass('active');
                $tab2.addClass('active');
            } else {
                $tab1.addClass('active');
                $tab2.removeClass('active');
            }
        });
    });


    $(document).ready(function () {
        $('.recent-work-popup').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
            }

        });

    });


    /*------------------------------------------
       = inner-active
   -------------------------------------------*/
    if ($(".inner-active").length) {
        $(".inner-active").owlCarousel({
            autoplay: true,
            smartSpeed: 300,
            margin: 20,
            loop: true,
            autoplayHoverPause: true,
            dots: true,
            nav: false,
            loop: true,
            items: 2,

            responsive: {
                0: {
                    items: 1,
                },

                500: {
                    items: 1,
                },

                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },

                1200: {
                    items: 4,
                },

            }
        });
    }



    /*==========================================================================
        WHEN DOCUMENT LOADING
    ==========================================================================*/
    $(window).on('load', function () {

        preloader();

        sliderBgSetting();

    });



    /*==========================================================================
        WHEN WINDOW SCROLL
    ==========================================================================*/
    $(window).on("scroll", function () {
        toggleBackToTopBtn();
    });


})(window.jQuery);
