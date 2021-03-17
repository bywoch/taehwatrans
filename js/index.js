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
    
});