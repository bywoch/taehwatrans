$(document).ready(function () {

    // Intial Border Position
    var activePos = $('.tabs-header .active').position();

    // Change Position
    function changePos() {

        // Update Position
        activePos = $('.tabs-header .active').position();

        // Change Position & Width
        $('.border').stop().css({
            //left: activePos.left,
            width: $('.tabs-header .active').width()
        });
    }

    changePos();

    // Intial Tab Height
    var tabHeight = $('.tab.active').height();

    // Animate Tab Height
    function animateTabHeight() {

        // Update Tab Height
        tabHeight = $('.tab.active').height();

        // Animate Height
        $('.tabs-content').stop().animate({
            height: tabHeight + 'px'
        });
    }

    animateTabHeight();

    // Change Tab
    function changeTab() {
        var getTabId = $('.tabs-header .active a').attr('tab-id');

        // Remove Active State
        $('.tab').stop().fadeOut(300, function () {
            // Remove Class
            $(this).removeClass('active');
        }).hide();

        $('.tab[tab-id=' + getTabId + ']').stop().fadeIn(300, function () {
            // Add Class
            $(this).addClass('active');

            // Animate Height
            animateTabHeight();
        });
    }

    
    
});
