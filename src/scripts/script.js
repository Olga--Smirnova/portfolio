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
    | GALLERY
----------------------------------------------------------------------------------*/
  new GridFx(document.querySelector('.grid'));


/*----------------------------------------------------------------------------------
    |
    | typed.js
    | source: http://www.mattboldt.com/demos/typed-js/
    |
----------------------------------------------------------------------------------*/
    // $(".ticker").typed(
    // {
    //     strings: [  "The web devepoler<br/>you were looking for<br/>is <strong class='ticker-link'>here</strong>",
    //                 "This is the <strong class='ticker-link'>right</strong> place<br/>to find a good web developer.",
    //                 "Looking for a pationate web developer?<br>You came to the right place!"
    //                 ],
    //     typeSpeed: 50,
    //     // backspacing speed
    //     backSpeed: 30,
    //     // time before backspacing
    //     backDelay: 10,
    //     // loop
    //     loop: false,
    //     // false = infinite
    //     loopCount: false,
    //     // show cursor
    //     showCursor: true
    //     // character for cursor
    //     //cursorChar: "|",
    // });


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



