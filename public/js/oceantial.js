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



let burger = document.getElementById("navTrigger"),
nav = document.getElementById("navMenu");

burger.addEventListener("click", function (e) {
this.classList.toggle("active");
nav.classList.toggle("active");
});

// Get the button
const menuHead = document.getElementById("menuHead");

// When the user scrolls down 20px from the top of the document, show the button

const scrollFunction = () => {
if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
) {
    mybutton.classList.remove("hidden");
    menuHead.classList.add("bg-default");
    menuHead.classList.add("drop-shadow-lg");

} else {
    mybutton.classList.add("hidden");
    menuHead.classList.remove("bg-default");
    menuHead.classList.remove("drop-shadow-lg");

}
};


$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  
});
