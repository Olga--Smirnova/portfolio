//     jquery.IMissYou.js 1.0.0

//     (c) 2015 Hamza Bahlaouane
//     jquery.IMissYou may be freely distributed under the MIT license.
//     For all details and documentation:
//     https://github.com/Bahlaouane-Hamza/I-Miss-You
!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):"object"==typeof module&&module.exports?module.exports=function(i,n){return void 0===n&&(n="undefined"!=typeof window?require("jquery"):require("jquery")(i)),e(n),n}:e(jQuery)}(function(e){"use strict";e.iMissYou=function(i){function n(){d.attr("href",u.favicon.src)}function t(){d.attr("href",f)}function o(){e("<img/>")[0].src=u.favicon.src}var u=e.extend({},e.iMissYou.defaults,i),c=document.title,d=e("head").find('link[rel$="icon"]'),f=d.attr("href");u.favicon.enabled&&o(),e(document).bind("visibilitychange",function(){e(document).prop("title",document.hidden?u.title:c),u.favicon.enabled&&(e(document).prop("hidden")?n():t())})},e.iMissYou.defaults={title:"I Miss you !",favicon:{enabled:!0,src:"iMissYouFavicon.ico"}}});
document.addEventListener("DOMContentLoaded",function(){
/*----------------------------------------------------------------------------------
    | PRELOADER
----------------------------------------------------------------------------------*/
    $(window).load(function()
    {
        $('.preloader').fadeOut('slow',function()
        {
            $(this).remove();
        });
    });

/*----------------------------------------------------------------------------------
    | BACKUPS
----------------------------------------------------------------------------------*/
//Opera Mini backup
    var isOperaMini = (navigator.userAgent.indexOf('Opera Mini') > -1);
    if (isOperaMini)
    { 
        $('#operamini').show(); 
    }



/*----------------------------------------------------------------------------------
    | SOME MOBILE STYLES
----------------------------------------------------------------------------------*/
    if(( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) || $(window).innerWidth() <= 768)
    {
        $('h5.align-me-right').removeClass('align-me-right');

        // To make the links open on the same window on mobile
        $('a').attr('target', '_self'); 

    }



/*----------------------------------------------------------------------------------
    |   
    | SMOOTH SCROLL
    | source: http://www.learningjquery.com/2007/10/improved-animated-scrolling-script-for-same-page-links
----------------------------------------------------------------------------------*/    
    $('a[href*=#]:not([href=#])').click(function()
    {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname)
        {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length)
            {
                
                if(!( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) || $(window).innerWidth() >= 768)
                {
                    $('html,body').animate({
                    scrollTop: target.offset().top}, 1000);
                }else{
                    $('html,body').animate({
                    scrollTop: target.offset().top}, 1000);
                }
            
                return false;
            }
        }
    });




/*----------------------------------------------------------------------------------
    | TO TOP BUTTON
----------------------------------------------------------------------------------*/
    // window.onscroll=function()
    // {   
    //     if(window.pageYOffset >= 400) //if user scrolled the page down to 400px, show "To Top" button, otherwise - hide it
    //     {
    //         $('.scrollToTop').css('display', 'block');
    //     }else{
    //         $('.scrollToTop').css('display', 'none');
    //     }
    // };

    
}); //document ready ends



