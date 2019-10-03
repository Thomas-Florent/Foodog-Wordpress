jQuery(document).ready(function ($) {
    $('.shortcode-accordion').find('.accordion-item-title').click(function (e) {
        e.preventDefault();
        $(this).next().slideToggle(200);
        $(".accordion-item-content").not($(this).next()).slideUp(200);
    });
});