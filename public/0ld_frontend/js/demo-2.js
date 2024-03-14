// Function To Create New Cookie
function CreateCookie(cookieName, cookieValue, daysToExpire) {
    var date = new Date();
    date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
    document.cookie = cookieName + "=" + cookieValue + "; expires=" + date.toGMTString();
}

// Function To Delete Existing Cookie
function DeleteCookie(cookieName, cookieValue) {
    var date = new Date(0).toGMTString();
    document.cookie = cookieName + "=" + cookieValue + "; expires=" + date;
}

// Function To Access Existing Cookie
function AccessCookie(cookieName) {
    var name = cookieName + "=";
    var allCookieArray = document.cookie.split(';');
    for (var i = 0; i < allCookieArray.length; i++) {
        var temp = allCookieArray[i].trim();
        if (temp.indexOf(name) == 0) {
            return temp.substring(name.length, temp.length);
        }
    }

    return "";
}

// Function To Check Existing Cookie
function CheckCookie() {
    var bgImageMode = AccessCookie("bgImageModeCookie");
    if (bgImageMode != "") {
        var bgIDClass = bgImageMode.split('||');
        var bgID = bgIDClass[0];
        var bgClass = bgIDClass[1];

        $("body").removeClass("body-bg-1");
        $("body").removeClass("body-bg-2");
        $("body").removeClass("body-bg-3");
        $("body").removeClass("body-bg-4");

        $("body").addClass(bgClass);

        $("#bg-switcher-css").attr("href", "assets/demo-2/css/backgrounds/" + bgID + ".css");
    }

    var rtlMode = AccessCookie("rtlModeCookie");
    if (rtlMode != "") {
        // alert(rtlMode);
        var $link = $('<link>', {
            rel: 'stylesheet',
            href: 'assets/demo-2/css/rtl.css',
            class: 'rtl'
        });
        $(".tools-sidebar .change-rtl").toggleClass('active');
        $link.appendTo('head');
    }

    // ecCreateCookie('bgImgModeCookie',bgIDClass,1);

    var darkMode = AccessCookie("darkModeCookie");
    if (darkMode != "") {
        var $link = $('<link>', {
            rel: 'stylesheet',
            href: 'assets/demo-2/css/dark.css',
            class: 'dark'
        });

        $("link[href='assets/demo-2/css/responsive.css']").before($link);

        $(".tools-sidebar .change-mode").toggleClass('active');
        $("body").addClass("dark");
    }
    else {
        var themeColor = AccessCookie("themeColorCookie");
        if (themeColor != "") {
            $('li[data-color = ' + themeColor + ']').toggleClass('active').siblings().removeClass('active');
            $('li[data-color = ' + themeColor + ']').addClass('active');

            if (themeColor != '01') {
                $("link[href='assets/demo-2/css/responsive.css']").before('<link rel="stylesheet" href="assets/demo-2/css/skin-' + themeColor + '.css" rel="stylesheet">');
            }
        }
    }
}

(function ($) {
    "use strict";

    /*--------------------- START Site Cookie function --------------------*/
    // Calling Function On Each Time Site Load | Reload
    CheckCookie();

    // On click method for Clear Cookie
    $(".clear-cach").on("click", function (e) {
        DeleteCookie("rtlModeCookie", "");
        DeleteCookie("darkModeCookie", "");
        DeleteCookie("themeColorCookie", "");
        DeleteCookie("bgImageModeCookie", "");
        location.reload();
    });

    /*--------------------- Site Loader   --------------------*/
    $(window).load(function () {
        $("#overlay").fadeOut("slow");
    });

    /*--------------------- Stickey headre on scroll &&  Menu Fixed On Scroll Active  --------------------*/
    var doc = document.documentElement;
    var w = window;

    var prevScroll = w.scrollY || doc.scrollTop;
    var curScroll;
    var direction = 0;
    var prevDirection = 0;
    var header = document.getElementById('main-menu-desk');

    var checkScroll = function () {

        curScroll = w.scrollY || doc.scrollTop;
        if (curScroll > prevScroll) {
            //scrolled up
            direction = 2;
        }
        else if (eccurScroll < prevScroll) {
            //scrolled down
            direction = 1;
        }

        if (direction !== prevDirection) {
            toggleHeader(direction, curScroll);
        }

        ecprevScroll = curScroll;
    };

    var toggleHeader = function (direction, curScroll) {

        if (direction === 2 && curScroll > 52) {
            header.classList.add('hide');
            prevDirection = direction;
            $("#main-menu-desk").removeClass("menu_fixed animated fadeInDown");
        }
        else {
            header.classList.remove('hide');
            prevDirection = direction;
            $("#main-menu-desk").addClass("menu_fixed animated fadeInDown");
        }
    };

    $(window).on("scroll", function () {
        var distance = $('.main-slider').offset().top,
            $window = $(window);

        if ($window.scrollTop() <= distance + 50) {
            $("#main-menu-desk").removeClass("menu_fixed animated fadeInDown");
        }
        else {
            checkScroll();
        }
    });

    /*--------------------- Bootstrap dropdown   --------------------*/
    $('.dropdown').on('show.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });
    $('.dropdown').on('hide.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });

    /*--------------------- Language and Currency Click to Active -------------------------------- */
    $(document).ready(function () {
        $(".header-top-lan li").click(function () {
            $(this).addClass('active').siblings().removeClass('active');
        });
        $(".header-top-curr li").click(function () {
            $(this).addClass('active').siblings().removeClass('active');
        });
    });

    /*--------------------- Toggle Search Bar --------------------- */
    $(".search-btn").on("click", function () {
        $(this).toggleClass('active');
        $('.dropdown_search').slideToggle('medium');
    });

    /*--------------------- Add To Whishlist -----------------------------------*/
    $("body").on("click", ".wishlist", function () {

        var count = $(".wishlist-count").html();
        count++;
        $(".wishlist-count").html(count);

    });

    /*--------------------- Add To Cart -----------------------------------*/
    $("body").on("click", ".add-to-cart", function () {

        var count = $(".cart-count").html();
        count++;
        $(".cart-count").html(count);

        // Remove Empty message
        $(".emp-cart-msg").parent().remove();

        // get an image url
        var img_url = $(this).parents().children(".image").find(".main-image").attr("src");
        var p_name = $(this).parents().parents().parents().find(".pro-title").children().html();
        var p_price = $(this).parents().parents().parents().find(".price").children(".new-price").html();

        var p_html = '<li>' +
            '<a href="product.html" class="sidecart_pro_img"><img src="' + img_url + '" alt="product"></a>' +
            '<div class="pro-content">' +
            '<a href="product.html" class="cart_pro_title">' + p_name + '</a>' +
            '<span class="cart-price"><span>' + p_price + '</span> x 1</span>' +
            '<div class="qty-plus-minus"><div class="dec _qtybtn">-</div>' +
            '<input class="qty-input" type="text" name="_qtybtn" value="1">' +
            '<div class="inc _qtybtn">+</div></div>' +
            '<a href="javascript:void(0)" class="remove">×</a>' +
            '</div>' +
            '</li>';

        $('.cart-pro-items').append(p_html);

    });

    (function () {
        var $cartToggle = $(".side-toggle"),
            $cart = $(".side-cart"),
            $MenuToggle = $(".mobile-menu-toggle");

        $cartToggle.on("click", function (e) {
            e.preventDefault();
            var $this = $(this),
                $target = $this.attr("href");
            // $("body").addClass("open");
            $(".side-cart-overlay").fadeIn();
            $($target).addClass("open");
            if ($this.parent().hasClass("mobile-menu-toggle")) {
                $this.addClass("close");
                $(".side-cart-overlay").fadeOut();
            }
        });

        $(".side-cart-overlay").on("click", function (e) {
            $(".side-cart-overlay").fadeOut();
            $cart.removeClass("open");
            $MenuToggle.find("a").removeClass("close");
        });

        $(".close").on("click", function (e) {
            e.preventDefault();
            $(".side-cart-overlay").fadeOut();
            $cart.removeClass("open");
            $MenuToggle.find("a").removeClass("close");
        });

        $("body").on("click", ".pro-content .remove", function () {

            // $(".pro-content .remove").on("click", function () {

            var cart_product_count = $(".cart-pro-items li").length;

            $(this).closest("li").remove();
            if (cart_product_count == 1) {
                $('.eccart-pro-items').html('<li><p class="emp-cart-msg">Your cart is empty!</p></li>');
            }

            var count = $(".cart-count").html();
            count--;
            $(".cart-count").html(count);

            cart_product_count--;
        });

    })();

    /*--------------------- cart Responsive Menu -----------------------------------*/
    function ResponsiveMobilecartMenu() {
        var $cartNav = $(".menu-content, .overlay-menu"),
            $cartNavSubMenu = $cartNav.find(".sub-menu");
        $cartNavSubMenu.parent().prepend('<span class="menu-toggle"></span>');

        $cartNav.on("click", "li a, .menu-toggle", function (e) {
            var $this = $(this);
            if ($this.attr("href") === "#" || $this.hasClass("menu-toggle")) {
                e.preventDefault();
                if ($this.siblings("ul:visible").length) {
                    $this.parent("li").removeClass("active");
                    $this.siblings("ul").slideUp();
                    $this.parent("li").find("li").removeClass("active");
                    $this.parent("li").find("ul:visible").slideUp();
                } else {
                    $this.parent("li").addClass("active");
                    $this.closest("li").siblings("li").removeClass("active").find("li").removeClass("active");
                    $this.closest("li").siblings("li").find("ul:visible").slideUp();
                    $this.siblings("ul").slideDown();
                }
            }
        });
    }
    ResponsiveMobilecartMenu();

    /*--------------------- Main Slider ---------------------- */
    var MainSlider = new Swiper('.slider.swiper-container', {
        loop: true,
        speed: 2000,
        effect: "slide",
        autoplay: {
            delay: 7000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    /*--------------------- Quick view Slider ------------------------------ */
    $('.qty-product-cover').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        asNavFor: '.qty-nav-thumb',
    });

    $('.qty-nav-thumb').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.qty-product-cover',
        dots: false,
        arrows: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 479,
                settings: {
                    slidesToScroll: 1,
                    slidesToShow: 2,
                }
            }
        ]
    });

    /*--------------------- Qty Plus Minus Button  ------------------------------ */
    var QtyPlusMinus = $(".qty-plus-minus");
    QtyPlusMinus.prepend('<div class="dec _qtybtn">-</div>');
    QtyPlusMinus.append('<div class="inc _qtybtn">+</div>');
    $("._qtybtn").on("click", function () {
        var $qtybutton = $(this);
        var QtyoldValue = $qtybutton.parent().find("input").val();
        if ($qtybutton.text() === "+") {
            var QtynewVal = parseFloat(QtyoldValue) + 1;
        } else {

            if (QtyoldValue > 1) {
                var QtynewVal = parseFloat(QtyoldValue) - 1;
            } else {
                QtynewVal = 1;
            }
        }
        $qtybutton.parent().find("input").val(QtynewVal);
    });

    /*--------------------- Trend Product Slider -------------------------------- */
    $('.trend-product .trend-slider').slick({
        rows: 1,
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToScroll: 3,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToScroll: 2,
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 425,
                settings: {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*--------------------- Scroll Up Button --------------------- */
    $.scrollUp({
        scrollText: '<i class="icon i-arrow-up" aria-hidden="true"></i>',
        easingType: "linear",
        scrollSpeed: 900,
        animation: "fade",
    });

    /*--------------------- Theme Color Change -------------------------------- */
    $('.change-color').on('click', 'li', function () {
        $('link[href^="assets/demo-2/css/skin-"]').remove();
        $('link.dark').remove();
        $('.change-mode').removeClass("active");
        var dataValue = $(this).attr('data-color');

        if ($(this).hasClass('active')) return;

        $(this).toggleClass('active').siblings().removeClass('active');

        if (dataValue != undefined) {
            $("link[href='assets/demo-2/css/responsive.css']").before('<link rel="stylesheet" href="assets/demo-2/css/skin-' + dataValue + '.css" rel="stylesheet">');
            // localStorage.setItem("colormode", dataValue);
            CreateCookie('themeColorCookie', dataValue, 1);
        }

        return false;
    });

    /*--------------------- Theme RTL Change -------------------------------- */
    $(".tools-sidebar .change-rtl .rtl-switch").click(function (e) {
        e.preventDefault();
        var $link = $('<link>', {
            rel: 'stylesheet',
            href: 'assets/demo-2/css/rtl.css',
            class: 'rtl'
        });

        $(this).parent().toggleClass('active');
        var rtlvalue = "ltr";
        if ($(this).parent().hasClass('change-rtl') && $(this).parent().hasClass('active')) {
            $link.appendTo('head');
            rtlvalue = "rtl";
            CreateCookie('rtlModeCookie', rtlvalue, 1);
        } else if ($(this).parent().hasClass('change-rtl') && !$(this).parent().hasClass('active')) {
            $('link.rtl').remove();
            rtlvalue = "ltr";
            DeleteCookie('rtlModeCookie', rtlvalue);
        }
    });

    /*--------------------- Theme Dark mode Change -------------------------------- */
    $(".tools-sidebar .change-mode .mode-switch").click(function (e) {
        e.preventDefault();
        var $link = $('<link>', {
            rel: 'stylesheet',
            href: 'assets/demo-2/css/dark.css',
            class: 'dark'
        });

        $(this).parent().toggleClass('active');
        var modevalue = "light";
        if ($(this).parent().hasClass('change-mode') && $(this).parent().hasClass('active')) {
            $("link[href='assets/demo-2/css/responsive.css']").before($link);

        } else if ($(this).parent().hasClass('change-mode') && !$(this).parent().hasClass('active')) {
            $('link.dark').remove();
            modevalue = "light";
        }

        if ($(this).parent().hasClass('active')) {
            $("#fixedbutton .change-color").css("pointer-events", "none");
            $("body").addClass("dark");
            modevalue = "dark";
            CreateCookie('darkModeCookie', modevalue, 1);
        } else {
            $("#fixedbutton .change-color").css("pointer-events", "all");
            $("body").removeClass("dark");
            DeleteCookie('darkModeCookie', modevalue);
        }
        // localStorage.setItem("mode", modevalue);
    });

    /*----------------------------- Full Screen mode Change -------------------------------- */
    $(".tools-sidebar .fullscreen-mode .fullscreen-switch").click(function (e) {
        e.preventDefault();

        $(this).parent().toggleClass('active');

        if (
            !document.fullscreenElement && // alternative standard method
            !document.mozFullScreenElement &&
            !document.webkitFullscreenElement &&
            !document.msFullscreenElement
        ) {
            // current working methods
            if (document.documentElement.requestFullscreen) {
                document.documentElement.requestFullscreen();
            } else if (document.documentElement.msRequestFullscreen) {
                document.documentElement.msRequestFullscreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullscreen) {
                document.documentElement.webkitRequestFullscreen(
                    Element.ALLOW_KEYBOARD_INPUT
                );
            }
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            }
        }
    });

    /*--------------------- Menu Active -------------------------------- */
    var current_page_URL = location.href;
    $(".main-menu ul li a").each(function () {
        if ($(this).attr("href") !== "#") {
            var target_URL = $(this).prop("href");
            if (target_URL == current_page_URL) {
                $('.main-menu a').parents('li, ul').removeClass('active');
                $(this).parent('li').addClass('active');
                return false;
            }
        }
    });

    /*--------------------- Color Hover To Image Change -------------------------------- */
    var $product = $('.product-tab,.trend-product').find('.opt-swatch');

    function initChangeImg($opt) {
        $opt.each(function () {
            var $this = $(this),
                ChangeImg = $this.hasClass('change-img');

            $this.on('mouseenter', 'li', function () {
                changeProductImg($(this));
            });

            $this.on('click', 'li', function () {
                changeProductImg($(this));
            });

            function changeProductImg(thisObj) {
                var $this = thisObj;
                var $load = $this.find('a');

                var $proimg = $this.closest('.product-inner').find('.pro-image');

                if (!$load.hasClass('loaded')) {
                    $proimg.addClass('pro-loading');
                }

                var $loaded = $this.find('a').addClass('loaded');

                $this.addClass('active').siblings().removeClass('active');
                if (ChangeImg) {
                    hoverAddImg($this);
                }
                setTimeout(function () {
                    $proimg.removeClass("pro-loading");
                }, 1000);
                return false;
            }
        });
    }

    function hoverAddImg($this) {
        var $optData = $this.find('.opt-clr-img'),
            $opImg = $optData.attr('data-src'),
            $opImgHover = $optData.attr('data-src-hover') || false,
            $optImgWrapper = $this.closest('.product-inner').find('.pro-image'),
            $optImgMain = $optImgWrapper.find('.image img.main-image'),
            $optImgMainHover = $optImgWrapper.find('.image img.hover-image');

        if ($opImg.length) {
            $optImgMain.attr('src', $opImg);
        }
        if ($opImg.length) {
            var checkDisable = $optImgMainHover.closest('img.hover-image');
            $optImgMainHover.attr('src', $opImgHover);
            if (checkDisable.hasClass('disable')) {
                checkDisable.removeClass('disable');
            }
        }
        if ($opImgHover === false) {
            $optImgMainHover.closest('img.hover-image').addClass('disable');
        }
    }

    $(window).on('load', function () {
        initChangeImg($product);
    });

    $("document").ready(function () {
        initChangeImg($product);
    });

    /*--------------------- Size Hover To Active -------------------------------- */
    $('.opt-size').each(function () {

        $(this).on('mouseenter', 'li', function () {
            // alert("1");
            onSizeChange($(this));
        });

        $(this).on('click', 'li', function () {
            // alert("2");
            onSizeChange($(this));
        });

        function onSizeChange(thisObj) {
            var $this = thisObj;
            var $old_data = $this.find('a').attr('data-old');
            var $new_data = $this.find('a').attr('data-new');
            var $old_price = $this.closest('.pro-content').find('.old-price');
            var $new_price = $this.closest('.pro-content').find('.new-price');

            $old_price.text($old_data);
            $new_price.text($new_data);

            $this.addClass('active').siblings().removeClass('active');
        }
    });

    /*--------------------- Testimonial Slider -------------------------------- */
    $('#testimonial-slider').slick({
        rows: 1,
        dots: true,
        arrows: false,
        centerMode: true,
        infinite: false,
        speed: 500,
        centerPadding: 0,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $("#testimonial-slider").find(".slick-slide").each(function (i) {
        var t = $(this).find(".test-img").html(), o = "li:eq(" + i + ")";
        $("#testimonial-slider").find(".slick-dots").find(o).html(t);
    });

    /*--------------------- Brand Slider -------------------------------- */
    $('#brand-slider').slick({
        rows: 1,
        dots: false,
        arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    dots: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToScroll: 2,
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*--------------------- Footer Toggle -------------------------------- */
    $(document).ready(function () {
        $("footer .footer-top .footer-widget .footer-links").addClass("footer-dropdown");

        $('.footer-heading').append("<div class='heading-res'><i class='icon i-angle-down'></i></div>");

        $(".footer-heading .heading-res").click(function () {
            var $this = $(this).closest('.footer-top .col-sm-12').find('.footer-dropdown');
            $this.slideToggle('slow');
            $('.footer-dropdown').not($this).slideUp('slow');
        });
    });

    /*--------------------- Add To  Cart Toast -------------------------------- */
    $(document).ready(function () {
        $("button.add-to-cart").click(function () {
            $("#addtocart_toast").addClass("show");
            setTimeout(function () { $("#addtocart_toast").removeClass("show") }, 3000);
        });
        $(".btn-group.wishlist").click(function () {
            $("#wishlist_toast").addClass("show");
            setTimeout(function () { $("#wishlist_toast").removeClass("show") }, 3000);
        });
    });

    $(document).ready(function () {
        $('.pro-image').append("<div class='pro-loader'></div>");
    });

    /*--------------------- Instagram slider & Category slider & Tooltips -----------------------------------*/
    $(function () {
        $('.insta-auto').infiniteslide({
            direction: 'left',
            speed: 50,
            clone: 10
        });
        $('[data-toggle="tooltip"]').tooltip();
    });

    /*----------------------------- category Slider -------------------------------- */
    $('.category-section .cat_slider').slick({
        rows: 1,
        dots: false,
        arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });

    /*--------------------- Tools sidebar ---------------------- */
    $(".tools-sidebar-toggle").on("click", function (e) {
        e.preventDefault();
        if ($(this).hasClass("in-out")) {
            $(".tools-sidebar").stop().animate({ right: "0px" }, 100);
            $(".tools-sidebar-overlay").fadeIn();
            if ($(".tools-sidebar-toggle").not("in-out")) {
                $(".tools-sidebar").stop().animate({ right: "-280px" }, 100);
                $(".tools-sidebar-toggle").addClass("in-out");
                // $(".tools-sidebar-overlay").fadeOut();
            }
            if ($(".tools-sidebar-toggle").not("in-out")) {
                $(".tools-sidebar").stop().animate({ right: "0" }, 100);
                $(".tools-sidebar-toggle").addClass("in-out");
                $(".tools-sidebar-overlay").fadeIn();
            }
        } else {
            $(".tools-sidebar").stop().animate({ right: "-280px" }, 100);
            $(".tools-sidebar-overlay").fadeOut();
        }

        $(this).toggleClass("in-out");
        return false;

    });

    $(".tools-sidebar-overlay").on("click", function (e) {
        $(".tools-sidebar-toggle").addClass("in-out");
        $(".tools-sidebar").stop().animate({ right: "-280px" }, 100);
        $(".tools-sidebar-overlay").fadeOut();
    });

    /*--------------------- bg Image ---------------------- */
    $('.back-bg-1').on('click', function (e) {
        var bgID = $(this).attr("id");
        var bgClass = "body-bg-1";
        setBGImage(bgID, bgClass);
    });

    $('.back-bg-2').on('click', function (e) {
        var bgID = $(this).attr("id");
        var bgClass = "body-bg-2";
        setBGImage(bgID, bgClass);
    });

    $('.back-bg-3').on('click', function (e) {
        var bgID = $(this).attr("id");
        var bgClass = "body-bg-3";
        setBGImage(bgID, bgClass);
    });

    $('.back-bg-4').on('click', function (e) {
        var bgID = $(this).attr("id");
        var bgClass = "body-bg-4";
        setBGImage(bgID, bgClass);
    });

    function setBGImage(bgID, bgClass) {
        $("body").removeClass("body-bg-1");
        $("body").removeClass("body-bg-2");
        $("body").removeClass("body-bg-3");
        $("body").removeClass("body-bg-4");

        $("body").addClass(bgClass);

        $("#bg-switcher-css").attr("href", "assets/demo-2/css/backgrounds/" + bgID + ".css");

        var bgIDClass = bgID + '||' + bgClass;

        CreateCookie('bgImageModeCookie', bgIDClass, 1);
    }
    /*--------------------- Copyright years JS -------------------------------- */
    var date = new Date().getFullYear();

    document.getElementById("copyright_year").innerHTML = date;
})(jQuery);
