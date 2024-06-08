/* scroll script */
var all_scroll = function(){
  "use strict";	

  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");
      $('html').addClass('nosmoth');
      $('header').addClass('fixed-head');

    }

    else{
      $('#btt').hide();
      $('html').removeClass('nosmoth');
      $('header').removeClass('fixed-head');   
    }
  });  
};
/* end scroll script */

var back_to_top = function(){
  "use strict";
  $('#btt').click(function(){
  $('body,html').animate({scrollTop:0},800);

  
  }); 
};


var open_sticky = function(){
  "use strict";
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('title');
  $('body').toggleClass('disable-scroll');
  $(this).toggleClass('show-sticky');
  $('.open-sticky').not(this).removeClass('show-sticky');
    $('#float-' + get_id).slideToggle('fast');
    $('.float-bottom').not('#float-' + get_id).slideUp('fast');
    return false;
  }); 
  
  $('.fbc-overlay, .fbc-bar > span, .fcb-close').click(function(){
    $('body').removeClass('disable-scroll');
  $('.open-sticky').removeClass('show-sticky');
    $('.float-bottom').slideUp('fast');
    return false;
  });
};




$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_sticky()
  
});
