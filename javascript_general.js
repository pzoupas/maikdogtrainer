$(document).ready(function(){

    /***** Slick Hero Banner ****/
    $('.heroBannerSlider > div').slick({
        
        infinite: true,
        dots: true,
        arrow: false,
        autoplay: true,
        autoplaySpeed: 1500,
        fade: true,
        fadeSpeed: 1500,
        slidesToShow: 1,
        slidesToScroll: 1,
        
    });
    $('.servisesBanner').slick({
        
        infinite: true,
        dots: true,
        arrow: false,
        autoplay: true,
        autoplaySpeed: 1500,
        fade: true,
        fadeSpeed: 1500,
        slidesToShow: 1,
        slidesToScroll: 1,
        
    });

    
    
    /***** Slick Bio ****/
    $('.bioImages').slick({
        
        infinite: true,
        dots: true,
        arrow: false,
        autoplay: true,
        autoplaySpeed: 1500,
        fade: true,
        fadeSpeed: 1500,
        slidesToShow: 1,
        slidesToScroll: 1,
        
    });

    /***** Scroll to Top ****/
    scrollToTop = function(){
        $("html, body").animate({
            scrollTop: 0
        }, 700);   
        // scroll στην κορυφή της σελίδας με μια smooth
        // ανελκυστική κίνηση διάρκειας 700 ms.

    };


    /***** Scroll Down Header Fade  ****/





    /***** scroll to next ******/ 
    $('.scrollToNext').click (function() {
        $('html, body').animate({scrollTop: $('.heroBannerSlider + section').offset().top }, 500 ,'linear');
        return false;
    });

    scollBio =function(){
        $('html, body').animate({scrollTop: $('.bio').offset().top }, 500 ,'linear');
        return false;
    }





    /***** closeBtn sidebar  ****/
    toggleMenu = function(){
        $('.layout-container').toggleClass('overflowHidden')
        $('.sidebar').toggleClass('is-visible');
    };



    /***** video play if user scroll down at section   ****/
    var video = document.querySelector('.videoContent video');

    window.addEventListener('scroll', function() {
    var videoRect = video.getBoundingClientRect();
    var windowHeight = window.innerHeight;
    
    // Έλεγχος αν το video είναι ορατό στο viewport
    if (videoRect.top < windowHeight && videoRect.bottom > 0) {
        video.play();
    } else {
        video.pause();
    }
    });


    /***** popup Close Button   ****/
    
    $(".popupBox button").click(function(){
        $(".popup").toggleClass("d-none")
    })   

    
    
    /***** Scroll Reveal Effects ****/
    const sr = ScrollReveal({
        reset: false,
        distance: '60px',
        duration: 2500,
        delay: 500
      });

    sr.reveal('h2', { delay: 400 , origin: 'top' });
    sr.reveal('h3:not(.sidebarMenu h3) ', { delay: 500 , origin: 'left'  });
    sr.reveal('h3:not(.popupBox h3) ', { delay: 500 , origin: 'left'  });
    sr.reveal('.newsInfo p , .newsInfo a  ' , { delay: 600 , origin: 'bottom' });
    sr.reveal('.newsImage img' , { delay: 600 , origin: 'right' });
    sr.reveal('.icon.dogTrainer' , { delay: 500 , origin: 'left' });
    sr.reveal('.icon.heart' , { delay: 500 , origin: 'bottom' });
    sr.reveal('.icon.dog' , { delay: 500 , origin: 'right' });
    sr.reveal('.bioText' , { delay: 600 , origin: 'left' });
    sr.reveal('.bioImages button.slick-prev , .bioImages button.slick-next ' , { delay: 600 , origin: 'bottom' });
    sr.reveal('.bioImages img' , { delay: 600 , origin: 'right' });
    sr.reveal('#collapseItems' , { delay: 600 , origin: 'top' });
    sr.reveal('.frequentQuestionsWrapp > a' , { delay: 600 , origin: 'left' }); 
    sr.reveal('#contact_form ' , { delay: 500 , origin: 'bottom' }); 
    sr.reveal('.frequentQuestionsWrapp > a' , { delay: 500 , origin: 'left' });
    sr.reveal('.textContact p' , { delay: 500 , origin: 'left' }); 
    sr.reveal('.trustedUsWrapper span' , { delay: 500 , origin: 'left' }); 
    sr.reveal('.trustedUsWrapper img' , { delay: 500 , origin: 'right' }); 
    sr.reveal('.trustedUsWrapper .item.changeBgColor span' , { delay: 500 , origin: 'right' }); 
    sr.reveal('.trustedUsWrapper .item.changeBgColor img' , { delay: 500 , origin: 'left' }); 
    sr.reveal('.faIconLink a' , { delay: 200 , origin: 'bottom' , interval: '200' }); 
    sr.reveal('.serviceInfo span' , { delay: 200 , origin: 'bottom'  }); 


    

    if (window.innerWidth < 992) {
        sr.reveal('h2', { delay: 400 , origin: 'top' });
        sr.reveal('h3:not(.sidebarMenu h3) ', { delay: 200 , origin: 'top' });
        sr.reveal('.newsInfo p , .newsInfo a  ' , { delay: 200 , origin: 'top' });
        sr.reveal('.newsImage img' , { delay: 200 , origin: 'top' });
        sr.reveal('.icon.dogTrainer' , { delay: 200 , origin: 'top' });
        sr.reveal('.icon.heart' , { delay: 200 , origin: 'top' });
        sr.reveal('.icon.dog' , { delay: 200 , origin: 'top' });
        sr.reveal('.bioText' , { delay: 200 , origin: 'top' });
        sr.reveal('.bioImages button.slick-prev , .bioImages button.slick-next ' , { delay: 600 , origin: 'top' });
        sr.reveal('.bioImages img' , { delay: 200 , origin: 'top' });
        sr.reveal('#collapseItems' , { delay: 200 , origin: 'top' });
        sr.reveal('.frequentQuestionsWrapp > a' , { delay: 600 , origin: 'top' }); 
        sr.reveal('#contact_form ' , { delay: 200 , origin: 'top' }); 
        sr.reveal('.frequentQuestionsWrapp > a' , { delay: 500 , origin: 'top' }); 
        sr.reveal('.textContact p' , { delay: 200 , origin: 'top' }); 
        sr.reveal('.textContact p' , { delay: 200 , origin: 'top' }); 
        sr.reveal('.trustedUsWrapper span' , { delay: 200 , origin: 'top' }); 
        sr.reveal('.trustedUsWrapper img' , { delay: 200 , origin: 'top' }); 
        sr.reveal('.trustedUsWrapper .item.changeBgColor span' , { delay: 200 , origin: 'top' }); 
        sr.reveal('.trustedUsWrapper .item.changeBgColor img' , { delay: 200 , origin: 'top' }); 
        sr.reveal('.faIconLink a' , { delay: 200 , origin: 'left' , interval: '200' }); 
        sr.reveal('.serviceInfo span' , { delay: 200 , origin: 'left' , interval: '200' }); 
        
    }


    // preloader 

    var loader =document.getElementById("preloader");

    window.addEventListener("load", function(){
        this.setTimeout(function(){
            loader.style.display="none";
        } , 2000)
        
    })


 
    var previousScrollPosition = $(window).scrollTop();
    
    $(window).scroll(function() {
        if ($(window).width() > 767) {
            var currentScrollPosition = $(window).scrollTop();
        
            if (previousScrollPosition > currentScrollPosition) {
            // Αν ο χρήστης κάνει scroll προς τα πάνω
            $(".header").removeClass("hide").addClass("show");
            } else {
            // Αν ο χρήστης κάνει scroll προς τα κάτω
            $(".header").removeClass("show").addClass("hide");
            }
        
            previousScrollPosition = currentScrollPosition;
        }
    });

    // load-more btn

    var items = $(".frequentQuestions .item");
    var loadMoreButton = $("#load-more");
    var itemsToShow = 5;
    var hiddenItems = items.slice(itemsToShow);
    

    // Αρχικά, κρύψτε όλα τα επιπλέον αντικείμενα
    hiddenItems.hide();
    
    loadMoreButton.click(function() {

        // βρες τα κρυμνένα items
        var hiddenItems = items.filter(":not(:visible)");
        // παρε τα 5 πρώτα από αυτά
        var hiddenItemsToShow = hiddenItems.slice(0, itemsToShow);
        hiddenItemsToShow.fadeIn("slow");

        if (hiddenItems.length === hiddenItemsToShow.length) {
            loadMoreButton.hide();
        }

        // console.log('Clicked!');
    });

    // mouse cursor
        // let mouseCursor = document.querySelector('.cursor');
        // let menuLinks = document.querySelectorAll('.menu li , .burger , .sidebarMenu li');


        // window.addEventListener('mousemove', cursor);

        // function cursor(e){
        //     // console.log(e);
        //     mouseCursor.style.top = e.pageY + 'px';
        //     mouseCursor.style.left = e.pageX + 'px';
        // }

        // menuLinks.forEach(link =>{
        //     link.addEventListener('mouseleave', () => {
        //         mouseCursor.classList.remove("link-grow");
        //         link.classList.remove("hoverMenuLink");
        //     });
        //     link.addEventListener('mouseover', () => {
        //         mouseCursor.classList.add("link-grow");
        //         link.classList.add("hoverMenuLink");
        //     });
        // });

    
});






  
  

