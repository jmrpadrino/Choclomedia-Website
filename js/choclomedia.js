/* Variables */
var toggle_responsive = false;

$(window).scroll(function() {    
    var scroll = $(this).scrollTop();
    var windowHeight = $(this).innerHeight();
    var footerHeight = $('footer').height();
    var heightToHide = scroll + windowHeight - footerHeight;
    if ( scroll >= 280 ) {
        $('.navbar-fixed-top').addClass('scrolled');
        if( $('.scrollTotop').length < 1){
            $('body').prepend( '<div id="scrollTotop" class="scrollTotop" onclick="scrollTotop()"><span class="fa fa-chevron-up"></span></div>' );
        }
    }else{
        $('.navbar-fixed-top').removeClass('scrolled');
        $('.scrollTotop').remove();
    }
    if( scroll >= 4000 ){
        if ( !$('.navbar-fixed-top').hasClass('hideNavbar') ){
            $('.navbar-fixed-top').addClass('hideNavbar');
        }
    }else{
        $('.navbar-fixed-top').removeClass('hideNavbar');
    }
});

function scrollTotop(){
    $('html,body').animate({ scrollTop: 0 }, 'slow');
};
/* Smooth Scroll*/

$(function () {
    "use strict";
    $('a[href*=#]:not([href=#])').click(function () {

        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});


/*----- END SMOOTH SCROLL ------*/

window.onload = function () {
    "use strict";
    var navbar = $("#responsive-nav");
    navbar.on('show.bs.collapse', function () {

        $('#responsive-nav').css('overflow', 'visible');
        $('.header-bar').css('background', '#232323');
        $('#header-logo').attr('src', 'http://' + window.location.hostname + '/wp-content/themes/sentry/images/sentry-wellhead-systems-logo-whitebkg.png');
        $('#responsive-nav')
            .addClass('navbar-full');
        /*$('.icon-bar')
            .css('background-color', 'white');
        $('.navbar-image>img')
            .css('opacity', 0.2);
        navbar.children('ul').css('height', '100%');*/

        //$('<div id="search-button-nav-responsive" class="search-button-nav-responsive"><span class="fa fa-search"></span>&nbsp; SEARCH</div>').insertAfter('#menu-top_main_menu');

        var isMobile = !!(/Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Windows Phone/i.test(navigator.userAgent));
        var ua = navigator.userAgent.toLowerCase();
        var is_safari = false;
        if (ua.indexOf('safari') !== -1 && !(ua.indexOf('chrome') > -1)) {
            is_safari = true;
        }
        if (!isMobile) {
            if (/Edge\/\d./i.test(navigator.userAgent) && window.innerWidth < 768) {
                navbar.css('margin-right', '-12px');
            } else if (/Edge\/\d./i.test(navigator.userAgent) && window.innerWidth > 767 && window.innerWidth < 992) {
                navbar.css('margin-right', '-17px');
            } else if (is_safari && window.innerWidth > 767 && window.innerWidth < 992) {
                navbar.css('margin-right', '-6px');
            } else if (is_safari) {
                navbar.css('margin-right', '0');
            } else if (window.innerWidth > 767 && window.innerWidth < 992) {
                navbar.css('margin-right', '-21px');
            } else {
                navbar.css('margin-right', '-15px');
            }
        } else {
            navbar.css('margin-right', 0);
        }
    })
        .on('hidden.bs.collapse', function () {
        $('body').css('overflow', 'auto');
        $('.header-bar').css('background','#ffffff');
        $('#header-logo').attr('src', 'http://'+ window.location.hostname +'/wp-content/themes/sentry/images/sentry-wellhead-systems-logo.png');
        /*$('#navbar-container')
            .removeClass('navbar-full')
            .addClass('navbartransparent');
        $('.icon-bar')
            .css('background-color', '#314f6a');
        $('.navbar-image>img')
            .css('opacity', 1);
        navbar.children('ul').css('height', '75px');*/
    });

    // Searh mask transform
    /*var search_frame_responsive = $('#search-frame-responsive');
    var navbar_container = $('#navbar-container');
    search_frame_responsive.css('height', window.innerHeight - navbar_container.height() ) ;*/
}


$(document).ready( function() {
    
    $('html').niceScroll( {
        cursorcolor: "#FF8900", 
        cursorborder: "none", 
        cursorborderradius: "5px",
        cursorwidth: "10px",
        touchbehavior: false,
        hwacceleration: false,
        bouncescroll: true,
    } );

    // Owlslider
    $('.owl-carousel').owlCarousel({
        items:1, // if you want a slider, not a carousel, specify "1" here
        startPosition: 0,
        loop:true,
        autoplay:true,
        autoplayHoverPause:false, // if slider is autoplaying, pause on mouse hover
        autoplayTimeout:4000,
        dots:true // dots navigation below the slider
    });
    //$( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    //$( ".owl-next").html('<i class="fa fa-chevron-right"></i>');

    // Sending mial via ajax
    $('#contact-form').submit( function(e) {

        // Prevenir que se envie el formulario
        e.preventDefault();

        var name = $('input[name=name]');
        var email = $('input[name=email]');
        var company = $('input[name=company]');
        var message = $('textarea[name=message]');

        $.ajax({
            type        : 'POST', 
            url         : choclomediaAjax.ajaxurl, 
            data        : 
            {
                'action': 'ajaxConversion',
                'action': 'send_mail_via_ajax',
                'g-recaptcha-response': grecaptcha.getResponse(),
                'name' : name.val(),
                'email' : email.val(),
                'company' : company.val(),
                'message' : message.val()
            },
            dataType: 'text',
            beforeSend  : function(){
                $('#submit-btn').val('Sending');    
            },
            error       : function(data){
                console.log(data);
            },
            success     : function(data){
                $('#form-submit-wrapper').html(data);
                console.log(data);
                if( data == 0 ){
                    //show error
                    $('#message-wrapper').html(
                        '<p class="form-message error">' +
                        'It\'s been occured an error while sending your message, please try again.' +
                        '</p>'
                    ).css('display','block');
                    $('#submit-btn').val('Send');
                }else{
                    $('#message-wrapper').html(
                        '<p class="form-message success">' +
                        'Your message have been sent. Thank You.' +
                        '</p>'
                    ).css('display','block');
                    //clean inputs
                    name.val('');
                    email.val('');
                    company.val('');
                    message.val('');
                    $('#submit-btn').val('Send');
                    grecaptcha.reset();
                }
            }
        });
    });

});
/*----- END READY FUNCTION -------*/