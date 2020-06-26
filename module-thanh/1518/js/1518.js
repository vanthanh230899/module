$(document).ready(function(){
    $(".navigation").sticky({
    topSpacing: 0,
    zIndex: '50'
    });

    $('.nav-search-link').click(function(){
        $('.search').css("visibility","visible");
    });
});