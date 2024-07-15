/* scroll script */
var all_scroll = function(){
  "use strict";	

  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");
      $('html').addClass('nosmoth');
      $('header').addClass('fixed-head');
      $('.logodefault').addClass('showlogo');
      $('.navTrigger').addClass('burgermenu');
      
      

    }

    else{
      $('#btt').hide();
      $('html').removeClass('nosmoth');
      $('header').removeClass('fixed-head');
      $('.logodefault').removeClass('showlogo');
      $('.navTrigger').removeClass('burgermenu');        
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

var chekbox = function(){
  "use strict";
  $('.vfb-checkbox input:checkbox').change(function(){
    if($(this).is(":checked")) {
        $('header').addClass("menuitemshow");
        $('.logodefault').addClass("none");
        $('.logodark').addClass("show");
    } else {
        $('header').removeClass("menuitemshow");
        $('.logodefault').removeClass("none");
        $('.logodark').removeClass("show");
    }
  });
};










$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  chekbox();
  
});
