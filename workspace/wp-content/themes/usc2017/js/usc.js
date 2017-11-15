/* Custom js for USC */

( function( $ ) {
    $(document).ready(function(){
        
        /* Enables smooth scrolling between the sections on the About Us page */
        $('.nextSect').on('click', function(e) {
            e.preventDefault();
            $('html, body').stop().animate({
                /* The padding proerties of the theme header and main elements have to be subtracted to scroll properly */
                scrollTop: $( $(this).attr('href')).offset().top - parseInt($('#masthead').css('padding-bottom'),0) - parseInt($('#primary').css('padding-top'),0)
            }, 2200, 'swing');
        });
        
        
        /* Adjusts membership table to the size of the memberships if content overflows */
        
        /* Needs the border below and above for correct adjustment */
        var borderWidth = $('.membership').css('borderWidth') * 2;
        
        $('#mshipTable').css('height',$('.membership').outerHeight(true) + borderWidth);
    });
} )( jQuery );