/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */


$( document ).ready(function() {
var menuBar = $('.nav1');
// console.log(menuBar);

var $document = $(document),
    className = 'hasScrolled';
// console.log($document);

$document.scroll(function() {
  console.log('srolling');
  if ($document.scrollTop() >= 50) {
    // user scrolled 50 pixels or more;
    // do stuff
    console.log('page scrolled');
    menuBar.addClass(className);
  } else {
    menuBar.removeClass(className);
  }
});



//////////////////// contact form modification
var chooseFileButton = $('.lang-pl .input-group-btn .buttonText');
// console.log(chooseFileButton);
chooseFileButton.innerHtml = 'Wybierz plik';

});
 ////////////////////////////////////////////////
 ///////// FULL_SLIDER
 ////////////////////////////////////////////////

 function slider(slider_id) {
 	var slider = document.querySelector('#'+slider_id);
   // console.log('slider start');
 	if (slider !== null) {
 		// Variable declaration
 		   var fotos_list = document.querySelectorAll('#'+slider_id+' .slide_bg');
       // console.log(fotos_list);
 		   var slide_box = document.querySelector('#'+slider_id+'.imgbox_slider .slides_box');
 			 var arrow_left = document.querySelector('#'+slider_id+' .arrow-left');
 		   var arrow_right = document.querySelector('#'+slider_id+' .arrow-right');
 		   var activ_foto_index = 0;



 		// Create slides all items
 		  function add_foto(src, index) {
 		    var  new_slide = document.createElement('div')
 		    new_slide.classList.add('slide_bg');
 		    new_slide.style.backgroundImage = 'url(' + src + ')';
 		      slide_box.appendChild(new_slide);
 					// console.log('slide add');
 		  }

 		  window.addEventListener("DOMContentLoaded", function() {
 				// console.log('fotos_list = '+fotos_list);
 		    fotos_list.forEach(add_foto);
 				var first_slide = document.querySelector('#'+slider_id+' .slide_bg');
 				// console.log(slide_box);
 				// console.log('first_slide deklaracja = ');
 				// console.log(first_slide);
 				first_slide.classList.add('active_slide');
 				// console.log('active class added');
 		  }, false);


 		  function change_slide(index) {
 		    // console.log('zmieniam slajda');
 		    slides = document.querySelectorAll('#'+slider_id+' .slides_box .slide_bg');
 				// console.log(slides);
 		   // remove active slide
 		    for (var i = 0; i < slides.length; i++) {
 		       slides[i].classList.remove('active_slide');
 		    }
 		  // show new slie
 			console.log(slider_id+' index '+index);
 		    slides[index].classList.add('active_slide');
 		    // console.log('Slide index = '+index);
 		  }


 		  function prev_slide(){
 				// console.log('change slide');
 		    clearInterval(interval);
 		    activ_foto_index--;
 		    if (activ_foto_index < 0) {activ_foto_index = fotos_list.length-1;}
 		    change_slide(activ_foto_index);
 		  }

 		  function next_slide() {
 				// console.log('change slide');
 		    clearInterval(interval);
 		    activ_foto_index++;
 		    if (activ_foto_index > fotos_list.length-1) {activ_foto_index = 0;}
 		    change_slide(activ_foto_index);
 		  }
 		  function auto_next_slide() {
 		    activ_foto_index++;
 		    if (activ_foto_index > fotos_list.length-1) {activ_foto_index = 0;}
 		    change_slide(activ_foto_index);
 		  }


 		var interval;
 		function auto_slide() {
 		    interval = setInterval(function() {auto_next_slide()}, 4000);
 		}
 		auto_slide();

 		arrow_left.addEventListener('click', prev_slide);
 		arrow_right.addEventListener('click', next_slide);

 	} else {
 		// console.log('BRAK SLIDERA: '+slider_id);
 	}


 };


 slider('slider_id1');


 ////////////////////////////////////////////////
 ///////// FULL_SLIDER END
 ////////////////////////////////////////////////

 // ABOUT US SCROLL BUTTON

  var scroll_buttons = $('#arrow_scroll_down');
  if (scroll_buttons) {
    // console.log('find-buttons');
    scroll_buttons.each(function(){
      $(this).on("click", function(){
// console.log('scroll');
        var $el = $(this);
        // var targetID = $(this).attr("data-target");
        var target2  = $('#our_values');
        console.log(target2);
        // console.log(target2);

        $('html, body').animate({
          scrollTop: target2.offset().top - 100
        }, 500);

        return false;

      })
    });
  };
  // UNIVERSAL SCROLL BUTTON END


  // TRANSFORM MENU BAR AFTER SCROLL
//   $( document ).ready(function() {
//     var  element = $('.nav1');
//     var  className = 'scroll';
// console.log(element);
//     console.log('te');
//
//   $(document).scrollTop(function() {
//     element.toggleClass(className, $document.scrollTop() >= 50);
//   });
// });
