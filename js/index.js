$(function () {

    /*--------------------- COMMON SCRIPT ---------------------*/

    var brekPoint = {
        pc: 769,
        moblie: 480
    }
    if ('ontouchstart' in window == false) {
        var brekPoint = {
            pc: 769 - 17,
            moblie: 480 - 17
        }
    }
    var win = $(window);
    var root = $('html');
    win.on('resize', function () {
        var ts = $(this);
        var w = ts.width();
        if (w >= brekPoint.pc && !root.hasClass('pc')) {
            root.removeClass('tablet mobile').addClass('pc');
        } else if (w < brekPoint.pc && w >= brekPoint.moblie && !root.hasClass('tablet')) {
            root.removeClass('pc mobile').addClass('tablet');
        } else if (w <= brekPoint.moblie && !root.hasClass('mobile')) {
            root.removeClass('pc tablet').addClass('mobile');
        }
    });
    win.trigger('resize');

    /*--------------------- PC SUB_MENU UP,DOWN SLIDER SCRIPT ---------------------*/

    $('.drop').hide();

    $('.pc .menu > ul > .drop_down').mouseover(function () {
        $('.pc #header > .drop').stop().slideDown('fast');
    });
    $('.pc .menu > ul > .drop_down').mouseleave(function () {
        $('.pc #header > .drop').stop().slideUp('fast');
    });
    $(".pc .menu > ul > li").mouseover(function () {
        $(this).children(".pc .sub_menu").show().stop().slideDown('fast');
    });
    $(".pc .menu > ul > li").mouseleave(function () {
        $(this).children(".pc .sub_menu").hide().stop().slideUp('fast', function () {
            $(this).css('height', 'auto');
        });
    });

    /*--------------------- TABLET, MOBILE SUB_MENU SLIDER SCRIPT ---------------------*/

    //$(".tablet .sub_menu").hide();

    var targetMobile = '.tablet .menu > ul > li > a.pe_n_768, .mobile .menu > ul > li > a.pe_n_768';
    $(document).on('click', targetMobile, function () {
        var ts = $(this);
        var oldActive = $('.tablet .menu > ul > li > a.pe_n_768, .mobile .menu > ul > li > a.pe_n_768').filter('.on');
        if (ts.hasClass('on')) {
            oldActive.next().slideUp(200);
            oldActive.removeClass('on');
        } else {
            oldActive.next().slideUp(200);
            oldActive.removeClass('on');
            ts.next().slideDown(200);
            ts.addClass('on');
        }
        $(window).resize(function () {
            var windowWidth = $(window).outerWidth();
            if (windowWidth > 768) {
                $('.pc .menu > ul > li > a').removeClass('on');
                $('.pc .sub_menu').hide();
            }
        });
        return false;
    });

    /*--------------------- TABLET, MOBILE SUB_MENU CLICK EVENT SCRIPT ---------------------*/

    $('.menu-close').hide();
    $('.menu-trigger').on('click', function () {
        $('.menu-trigger').toggleClass('active');
        $('.menu-close').show();
        $('.menu_wrap').css('position', 'static').animate({
            'left': '0%'
        }, 300);
        $('#container, #footer').hide();

        $(window).resize(function () {
            var windowWidth = $(window).outerWidth();
            if (windowWidth > 768) {
                $('.menu_wrap').css('left', '0');
                $('#container, #footer').show();
                $('.menu-trigger').hide();

            } else if ($('.menu-trigger').show()) {
                $('.menu_wrap').css('left', '-100%');
                $('#container, #footer').hide();
                $('.menu-trigger').show();
            }
        });

    });
    $('.menu-close').click(function () {
        //$('#header').css('height','110px');
        $('.menu-trigger').toggleClass('active');
        $('.menu-close').hide();
        $('.menu_wrap').css('position', 'absolute').animate({
            'left': '-100%'
        }, 300);
        $('#container, #footer').show();
        /*$('.header').css('position', 'static');*/
        $(window).resize(function () {

            var windowWidth = $(window).outerWidth();
            if (windowWidth < 768) {
                $('#container, #footer').show();
            }
            return false;
        });

    });

    /*--------------------- MAIN PAGE SEARCH SCRIPT ---------------------*/

    $('.pc .sc_tt_02 > p').on('click', function () {
        $(".sc_tt_02").stop().animate({
            width: "70%"
        }, 500, "linear");
        $(".sc_tt_01").stop().animate({
            width: "30%"
        }, 500, "linear");
        $('.tt_01_l_txt, .tt_02_s_txt, .search_box').hide();
        $('.tt_01_s_txt, .tt_02_l_txt, .md_slt_box').show();
        return false;
    });
    $('.pc .sc_tt_01 > p').on('click', function () {
        $(".sc_tt_01").stop().animate({
            width: "70%"
        }, 500, "linear");
        $(".sc_tt_02").stop().animate({
            width: "30%"
        }, 500, "linear");
        $('.tt_01_s_txt, .tt_02_l_txt, .md_slt_box').hide();
        $('.tt_01_l_txt, .tt_02_s_txt, .search_box').show();
        return false;
    });

});