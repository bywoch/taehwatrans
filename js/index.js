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

    /*--------------------- TABLE SCRIPT ---------------------*/

    $('.pc .spcfct_slt > .slt_bt_02').on('click', function () {
        $('.pc .spcfct_box > .tb_02').css('opacity', '1');
        $('.pc .spcfct_box > .tb_01').css('opacity', '0');
        $('.pc .spcfct_box > .tb_03').css('opacity', '0');
    });

    $('.pc .spcfct_slt > .slt_bt_03').on('click', function () {
        $('.pc .spcfct_box > .tb_03').css('opacity', '1');
        $('.pc .spcfct_box > .tb_01').css('opacity', '0');
        $('.pc .spcfct_box > .tb_02').css('opacity', '0');
    });

    $('.pc .spcfct_slt > .slt_bt_01').on('click', function () {
        $('.pc .spcfct_box > .tb_01').css('opacity', '1');
        $('.pc .spcfct_box > .tb_02').css('opacity', '0');
        $('.pc .spcfct_box > .tb_03').css('opacity', '0');
    });

    $('.tablet .spcfct_slt .spcfct_table_box, .mobile .spcfct_slt .spcfct_table_box').hide();

    var targetSltButton = '.tablet .slt_a, .mobile .slt_a';
    $(document).on('click', targetSltButton, function () {

        var ts = $(this);
        var sltActive = $('.slt_a').filter('.on');

        if (ts.hasClass('on')) {
            sltActive.parent().children('.spcfct_slt .spcfct_table_box').slideUp(200);
            sltActive.removeClass('on');
        } else {
            sltActive.parent().children('.spcfct_slt .spcfct_table_box').slideUp(200);
            sltActive.removeClass('on');
            ts.parent().children('.spcfct_slt .spcfct_table_box').slideDown(200);
            ts.addClass('on');
        }

        return false;

    });

    var ppAsButton = '.pp_as_ask_box > ul > li';
    $(document).on('click', ppAsButton, function () {

        var ts = $(this);
        var asActive = $('.pp_as_ask_box > ul > li').filter('.on');
        if (ts.hasClass('on')) {
            asActive.filter('.spcfct_slt .spcfct_table_box').slideUp(200);
            asActive.removeClass('on');
        } else {
            asActive.filter('.spcfct_slt .spcfct_table_box').slideUp(200);
            asActive.removeClass('on');
            ts.filter('.spcfct_slt .spcfct_table_box').slideDown(200);
            ts.addClass('on');
        }

        return false;
        
    });
    var targetPpas = '.pp_as_ask_box > ul > li > a';
    $(document).on('click', targetPpas, function () {
        var ts = $(this);

        var ppasActive = $('.pp_as_ask_box > ul > li > a').filter('.on');
        if (ts.hasClass('on')) {
            ppasActive.next().slideUp(200);
            ppasActive.removeClass('on');
        } else {
            ppasActive.next().slideUp(200);
            ppasActive.removeClass('on');
            ts.next().slideDown(200);
            ts.addClass('on');
        }
        return false;
    });

    /*--------------------- SCROLL TOP EVENT BUTTON SCRIPT ---------------------*/

    $('.btn-up').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.btn-up').stop().animate({
                'bottom': '10px',
                'opacity': .7
            }, 300, "swing");
        } else {
            $('.btn-up').stop().animate({
                'bottom': '-80px',
                'opacity': 0
            }, 300, "swing");
        }
        if ($(window).width() > 760) {
            var st = $(window).scrollTop() + "px";
            $('.left-menu').css({
                "top": st
            });
        } else {
            $('.left-menu').css({
                "top": "0px"
            });
        }
    });

    /*----------------------------------------*/

    $(window).scroll(function () {
        var scr = $(window).scrollTop();
        if (scr > 80) {
            $(".pc .spl_search_wrap").css('position', 'fixed').css('top', '0px').css('z-index', '999');
            $(".pc .nav_wrap").css('position', 'fixed').css('top', '51px').css('z-index', '999');
        } else {
            $(".pc .spl_search_wrap, .pc .nav_wrap").css('position', 'static');
        }

    });

    /*----------------------------------------*/

    $(".nav_wrap li a").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 500);
    });

    /*----------------------------------------*/

    $(".tab_btn_right").on('click', function () {
        $(".tabs-content").animate({
            scrollLeft: 1160
        });
    });
    $('.tab_btn_left').off().on('click', function () {
        $(".tabs-content").animate({
            scrollLeft: 0
        });
    });
    $('.tab_btn_left').css('opacity', '0');
    $(".tabs-content").scroll(function () {
        var scrollT = $(this).scrollLeft();
        var scrollH = $(this).width();
        var contentH = $(".tabs").width();
        if (scrollT + scrollH >= contentH) {
            $('.tab_btn_left').css('opacity', '1');
            $('.tab_btn_right').css('opacity', '0');
        }
        if (scrollT + scrollH == contentH) {
            $('.tab_btn_left').css('opacity', '0');
            $('.tab_btn_right').css('opacity', '1');
        }
    });

    /*----------------------------------------*/

    $(window).on('scroll', function () {
        var sct = $(window).scrollTop();

        if ($(window).scrollTop() > 500) {

            $(".pc .content_box_02").stop().animate({
                'top': sct - 480
            }, 500);
        } else {
            $(".pc .content_box_02").stop().animate({
                top: '0'
            }, 500);
        }
    });

    /*----------------------------------------*/

    $('.content_box_02 > ul li a').on('click', function () {
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top - 51
        }, 500);
        return false;
    });

    /*----------------------------------------*/

    $(window).bind("pageshow", function (event) {
        if (event.originalEvent.persisted) {
            document.location.reload();
        }
    });


});