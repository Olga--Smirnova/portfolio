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



