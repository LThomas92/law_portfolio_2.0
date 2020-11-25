var $ = jQuery.noConflict();
let windowSize = false;
let windowHeight= $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height()*.33;

$(document).ready(function(){
  //SEARCH ICON
  $('.search-icon').click(function() {
    $('.search-overlay').addClass('active');
    $('.close-btn').show();
    $('.search-icon').hide();
  });

      //CLOSE BTN
    $('.close-btn').on('click', function(){
      $('.search-overlay').removeClass('active');
      $('.close-btn').hide();
      $('.search-icon').show()
      });

       //MOBILE 
  //HAMBURGER MENU
  $('.mobile-close-btn').hide();
  $('.hamburger-menu').on('click', function() {
    $('.menu-overlay').show();
    $('.hamburger-menu').hide();
    $('.mobile-close-btn').show();
  });

  //CLOSE BTN

  $('.mobile-close-btn').on('click', function(){
    $('.menu-overlay').hide();
    $('.mobile-close-btn').hide();
    $('.hamburger-menu').show();
  });

 
  if ( jQuery('.project-block-section > *').length && (!( window.location.hash != "" && jQuery(window.location.hash).length )) ) {
    gutenbergScrollAnims = true;
    jQuery('.project-block-section > *').each(function(){
      let offset = jQuery(this).get(0).getBoundingClientRect().top;;
      jQuery(this).data('offset', offset);
      jQuery(this).addClass('to-reveal');
    });

    let numRevealed = 0;
    jQuery('.project-block-section .to-reveal').each(function() {
      if (jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >= jQuery(this).data('offset')) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function(){
          thisRef.removeClass('to-reveal');
          thisRef.addClass('revealed');
        }, 700 + (numRevealed * 600));
      }
    });
  }

  $(window).scroll(()=>{
    let scrolled = $(window).scrollTop();
  
    // gutenberg scroll anims
    if (gutenbergScrollAnims) {
     $('.project-block-section .to-reveal').each(function() {
      console.log($(this).data('offset'));
      console.log(scrolled + windowHeight - blockTriggerHeight);
       if (scrolled + windowHeight - blockTriggerHeight >= $(this).data('offset')) {
         $(this).removeClass('to-reveal');
         $(this).addClass('revealed');
  
       }
     });
    }
  });
  
  $(window).resize(() => {
  
    if ( jQuery('.project-block-section > *').length && (!( window.location.hash != "" && jQuery(window.location.hash).length )) ) {
      gutenbergScrollAnims = true;
      // console.log(window.scrollY + $(window).height());
      // console.log($('.gutenberg-styles > *'));
      jQuery('.project-block-section > *').each(function(){
        let offset = jQuery(this).get(0).getBoundingClientRect().top;
        // console.log(offset);
        jQuery(this).data('offset', offset);
        jQuery(this).addClass('to-reveal');
      });
  
      let numRevealed = 0;
      jQuery('.project-block-section .to-reveal').each(function() {
        if (jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >= jQuery(this).data('offset')) {
          numRevealed++;
          const thisRef = $(this);
          setTimeout(function(){
            thisRef.removeClass('to-reveal');
            thisRef.addClass('revealed');
          }, 700 + (numRevealed * 600));
        }
      });
    }
  })
});