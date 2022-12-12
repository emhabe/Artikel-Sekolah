/*
 ----------------------------------------------------------------------
 Preloader
 ----------------------------------------------------------------------
 */
$(window).load(function() {

    "use strict";

    $(".loader").delay(500).fadeOut();
    $(".animationload").delay(500).fadeOut("fast");

});

/*
 ----------------------------------------------------------------------
 Nice scroll
 ----------------------------------------------------------------------
 */
$("html").niceScroll({
    cursorcolor: '#fff',
    cursoropacitymin: '0',
    cursoropacitymax: '1',
    cursorwidth: '2px',
    zindex: 999999,
    horizrailenabled: false,
    enablekeyboard: false
});
