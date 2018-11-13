$(document).ready(function() {
    $('.fixed_menu').mouseover(function() {
        $('.fixed_menu ul li span').css('display', 'inline');
    });

    $('.fixed_menu').mouseout(function() {
        $('.fixed_menu ul li span').css('display', 'none');
    });
});