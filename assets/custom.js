/*--------------------------------------------------------------
 Custom js
 --------------------------------------------------------------*/
jQuery(document).ready(function($) {
    $(".dropdown").hover(function() {
        $(this).children('.dropdown-content').addClass('show');
    }, function() {
        $(this).children('.dropdown-content').removeClass('show');
    });
});