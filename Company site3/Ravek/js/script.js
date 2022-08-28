$(function(){
    jQuery('#js-toggle').on('click', function(){
        jQuery('.header-nav').toggleClass('active');
        jQuery('.burger-line').toggleClass('active');
        jQuery('.burger-title').toggleClass('active');
    });

    jQuery('#js-nav-link').on('click', function(){
        jQuery('.header-nav').removeClass('active');
        jQuery('.burger-line').removeClass('active');
        jQuery('.burger-title').removeClass('active');
    });
});
