$(function () {

    var brekPoint = {
        pc: 769,
        moblie: 480
    }

    if ('ontouchstart' in window == false) { //17을 빼는 경우(PC에서 볼 때)
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
        /*console.log(w);*/
        if (w >= brekPoint.pc && !root.hasClass('pc')) { //PC
            root.removeClass('tablet mobile').addClass('pc');
        } else if (w < brekPoint.pc && w >= brekPoint.moblie && !root.hasClass('tablet')) { //Tablet
            root.removeClass('pc mobile').addClass('tablet');
        } else if (w <= brekPoint.moblie && !root.hasClass('mobile')) { //Mobile
            root.removeClass('pc tablet').addClass('mobile');
        }
    });

    win.trigger('resize');

    /*----------------------------------------*/

    $('.slider').bxSlider({
        speed: 1000,
        pause: 4000,
        auto: true,
        autoHover: true,
        controls: true,
        autoControls: true,
        onSlideAfter: function (slider) {
            $('.pc .slider > li .slider_txt_box p').css('opacity', '1').addClass('fa_i_dw');
            $('.pc .slider > li .slider_txt_box span').css('opacity', '1');
            $('.pc .slider > li .slider_txt_box a').css('opacity', '1').addClass('fa_i_up2');
        },
        onSlideBefore: function (slider) {
            $('.pc .slider > li .slider_txt_box p').css('transition', 'all 0.5s').css('opacity', '0').removeClass('fa_i_dw');
            $('.pc .slider > li .slider_txt_box span').css('transition', 'all 0.5s').css('opacity', '0');
            $('.pc .slider > li .slider_txt_box a').css('transition', 'all 0.5s').css('opacity', '0').removeClass('fa_i_up2');
        }
    });

    /*----------------------------------------*/

    $('.drop').hide();

    $('.pc .menu > ul > .drop_down').mouseover(function () {
        $('.pc #header > .drop').stop().slideDown('fast');
    });
    $('.pc .menu > ul > .drop_down').mouseleave(function () {
        $('.pc #header > .drop').stop().slideUp('fast');
    });
    $(".pc .menu > ul > li").mouseover(function () {
        $(this).children(".pc .sub_menu").stop().slideDown("fast");
    });
    $(".pc .menu > ul > li").mouseleave(function () {
        $(this).children(".pc .sub_menu").stop().slideUp("fast", function () {
            $(this).css('height', 'auto');
        });
    });

    $(".sub_menu").hide();
    var targetMobile = '.tablet .menu > ul > li > a, .mobile .menu > ul > li > a';
    $(document).on('click', targetMobile, function () {
        var ts = $(this);
        var oldActive = $('.menu > ul > li > a').filter('.on');
        if (ts.hasClass('on')) {
            oldActive.next().slideUp(200);
            oldActive.removeClass('on');
        } else {
            oldActive.next().slideUp(200);
            oldActive.removeClass('on');
            ts.next().slideDown(200);
            ts.addClass('on');
        }
        return false;
    });

    /*----------------------------------------*/

    //Tab_menu
    $('.pc .sc_tt_02 > p').on('click', function () {

        $(".sc_tt_02").stop().animate({
            width: "70%" // CSS width 프로퍼티의 값을 "400px"로 설정함.
        }, 500, "linear"); // 시간당 속도 함수를 "linear"으로 설정함.

        $(".sc_tt_01").stop().animate({
            width: "30%" // CSS width 프로퍼티의 값을 "400px"로 설정함.
        }, 500, "linear"); // 시간당 속도 함수를 "linear"으로 설정함.

        $('.tt_01_l_txt, .tt_02_s_txt, .serch_box').hide();
        $('.tt_01_s_txt, .tt_02_l_txt, .md_slt_box').show();

        return false;
    });
    $('.pc .sc_tt_01 > p').on('click', function () {

        $(".sc_tt_01").stop().animate({
            width: "70%" // CSS width 프로퍼티의 값을 "400px"로 설정함.
        }, 500, "linear"); // 시간당 속도 함수를 "linear"으로 설정함.

        $(".sc_tt_02").stop().animate({
            width: "30%" // CSS width 프로퍼티의 값을 "400px"로 설정함.
        }, 500, "linear"); // 시간당 속도 함수를 "linear"으로 설정함.

        $('.tt_01_s_txt, .tt_02_l_txt, .md_slt_box').hide();
        $('.tt_01_l_txt, .tt_02_s_txt, .serch_box').show();

        return false;

    });

    /*----------------------------------------*/

    // 메뉴 버튼 클릭.
    $('.menu-close').hide();
    $('.menu-trigger').on('click', function () {
        $('.menu-trigger').toggleClass('active');
        $('.menu-close').show();
        $('.menu_wrap').animate({
            'left': '0%'
        }, 300);
        $('#container, #footer').hide(500);
    });
    $('.menu-close').click(function () {
        $('.menu-trigger').toggleClass('active');
        $('.menu-close').hide();
        $('.menu_wrap').animate({
            'left': '-100%'
        }, 300);
        $('#container, #footer').show(500);
    });

    /*----------------------------------------*/

    /*
    $('.slider').bxSlider({
        speed: 1000,
        pause: 3000,
        auto: true,
        autoHover: true,
        controls: true,
        autoControls: true
    });

    $('.slider').on(function (bxSlider, onSlideAfter) {
        $('.pc .slider > li .slider_txt_box p').css('opacity', '1').addClass('fa_i_dw');
        $('.pc .slider > li .slider_txt_box span').css('opacity', '1');
        $('.pc .slider > li .slider_txt_box a').css('opacity', '1').addClass('fa_i_up2');
    });

    $('.slider').on(function (bxSlider, onSlideBefore) {
        $('.pc .slider > li .slider_txt_box p').css('transition', 'all 0.5s').css('opacity', '0').removeClass('fa_i_dw');
        $('.pc .slider > li .slider_txt_box span').css('transition', 'all 0.5s').css('opacity', '0');
        $('.pc .slider > li .slider_txt_box a').css('transition', 'all 0.5s').css('opacity', '0').removeClass('fa_i_up2');
    });
    */

    /*----------------------------------------*/

    // 자세히 보기 PC Ver.
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

    //자세히 보기 Tablet Ver, 자세히 보기 Mobile Ver.
    $('.tablet .spcfct_slt .spcfct_table_box, .mobile .spcfct_slt .spcfct_table_box').hide();

    var targetSltButton = '.tablet .slt_a, .mobile .slt_a';
    $(document).on('click', targetSltButton, function () {
        var ts = $(this);

        var sltActive = $('.slt_a').filter('.on');
        if (ts.hasClass('on')) { // 클릭한 메뉴가 펼쳐져 있을 때 //('on')가 있으면
            sltActive.parent().children('.spcfct_slt .spcfct_table_box').slideUp(200); // 접고
            sltActive.removeClass('on'); // 삭제
        } else { // ('on')가 없으면
            sltActive.parent().children('.spcfct_slt .spcfct_table_box').slideUp(200); // 클릭한 메뉴가 닫혀 있을 때 // 필터중에 ('.on')가 있으면
            sltActive.removeClass('on'); // 삭제
            ts.parent().children('.spcfct_slt .spcfct_table_box').slideDown(200);
            ts.addClass('on'); // ('on')추가
        }
        return false;
    });

    var ppAsButton = '.pp_as_ask_box > ul > li';
    $(document).on('click', ppAsButton, function () {
        var ts = $(this);

        var asActive = $('.pp_as_ask_box > ul > li').filter('.on');
        if (ts.hasClass('on')) { // 클릭한 메뉴가 펼쳐져 있을 때 //('on')가 있으면
            asActive.filter('.spcfct_slt .spcfct_table_box').slideUp(200); // 접고
            asActive.removeClass('on'); // 삭제
        } else { // ('on')가 없으면
            asActive.filter('.spcfct_slt .spcfct_table_box').slideUp(200); // 클릭한 메뉴가 닫혀 있을 때 // 필터중에 ('.on')가 있으면
            asActive.removeClass('on'); // 삭제
            ts.filter('.spcfct_slt .spcfct_table_box').slideDown(200);
            ts.addClass('on'); // ('on')추가
        }
        return false;
    });

    var targetPpas = '.pp_as_ask_box > ul > li > a';
    $(document).on('click', targetPpas, function () {
        var ts = $(this);

        var ppasActive = $('.pp_as_ask_box > ul > li > a').filter('.on');
        if (ts.hasClass('on')) { // 클릭한 메뉴가 펼쳐져 있을 때 //('on')가 있으면
            ppasActive.next().slideUp(200); // 접고
            ppasActive.removeClass('on'); // 삭제
        } else { // ('on')가 없으면
            ppasActive.next().slideUp(200); // 클릭한 메뉴가 닫혀 있을 때 // 필터중에 ('.on')가 있으면
            ppasActive.removeClass('on'); // 삭제
            ts.next().slideDown(200);
            ts.addClass('on'); // ('on')추가
        }

        return false;
    });

    /*----------------------------------------*/

    //Top Button Icon
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

    //Select animation Function
    $(window).scroll(function () { // 사용자가 스크롤을 움직였을 때 이벤트 실행
        var scr = $(window).scrollTop(); // 변수에 스크롤이 움직인 값을 저장.
        $("h1").text(scr); // 변수에 저장된 값을 h1태그에 출력.

        if (scr > 1068) { // scr값이 900보다 작으면
            $(".pc .serch_wrap").css('position', 'fixed').css('top', '0px').css('z-index', '999');
            $(".pc .nav_wrap").css('position', 'fixed').css('top', '51px').css('z-index', '999');
        }
        if (scr < 978) {
            $(".pc .serch_wrap, .pc .nav_wrap").css('position', 'static');
        }

    });

    /*----------------------------------------*/
    /*
    $('.pc .nv_m_01').click(function () {
        $('html, body').animate({
            scrollTop: 1483
        }, 500);
    });
    $('.pc .nv_m_02').click(function () {
        $('html, body').animate({
            scrollTop: 2090
        }, 500);
    });
    $('.pc .nv_m_03').click(function () {
        $('html, body').animate({
            scrollTop: 2847
        }, 500);
    });
    $('.pc .nv_m_04').click(function () {
        $('html, body').animate({
            scrollTop: 3687
        }, 500);
    });
    $('.pc .nv_m_05').click(function () {
        $('html, body').animate({
            scrollTop: 4443
        }, 500);
    });
    */
    /*----------------------------------------*/

    $(".nav_wrap li a").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 500);
    });

    /*----------------------------------------*/

    $('.nav-tabs').scrollingTabs({});

    /*----------------------------------------*/

    /*$('.tab_btn_left').hide();*/

    $(".tab_btn_right").on('click', function () {
        /*$(".tabs-content").animate({
            scrollLeft: $(".tabs").width() + $(".tabs-content").width()
        });*/
        $(".tabs-content").animate({
            scrollLeft: 1160
        });
        /*$('.tab_btn_left').show();
        $('.tab_btn_right').hide();*/

    });

    $('.tab_btn_left').off().on('click', function () {
        $(".tabs-content").animate({
            scrollLeft: 0
        });
        /*$('.tab_btn_left').hide();
        $('.tab_btn_right').show();*/
    });

    $('.tab_btn_left').hide();
    $(".tabs-content").scroll(function () {

        var scrollT = $(this).scrollLeft(); //스크롤바의 좌측위치
        var scrollH = $(this).width(); //스크롤바를 갖는 div의 넓이
        var contentH = $(".tabs").width(); //문서 전체 내용을 갖는 div의 넓이

        if (scrollT + scrollH >= contentH) { // 스크롤바가 맨 오른쪽에 위치할 때
            $('.tab_btn_left').show();
            $('.tab_btn_right').hide();
        } else {
            $('.tab_btn_left').hide();
            $('.tab_btn_right').show();
        }
    });

    /*----------------------------------------*/
    
    
    
    /*----------------------------------------*/



});
