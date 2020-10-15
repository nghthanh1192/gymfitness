jQuery(document).ready(function ($) {
    // Make the menu responsive
    $('#menu-main-navigation').slicknav({
        // appendTo : '.site-header'
    });

    // Run the BxSlider library on testimonials
    $('.testimonials-list').bxSlider({
        control: false,
        mode: 'fade' 
    });
});