<!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- main js -->
 <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script> <!-- bootstrap js -->
 {{-- <script type="text/javascript " src="../dist/simple-lightbox.js"></script> --}}
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="{{asset('scripts/jquery.bootstrap.newsbox.min.js')}}" type="text/javascript"></script>
 <script src="https://use.fontawesome.com/1744f3f671.js"></script>
 <!-- Script For News -->
 
 <script type="text/javascript">
     $(function () {
         $(".demo1").bootstrapNews({
             newsPerPage: 4,
             autoplay: true,
             pauseOnHover:true,
             direction: 'up',
             newsTickerInterval: 2000,
             onToDo: function () {
                 //console.log(this);
             }
         });
     });
 </script>
 
 <!-- Testimonial -->
 <script>
     
     // vars
     'use strict'
     var	testim = document.getElementById("testim"),
             testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
         testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
         testimLeftArrow = document.getElementById("left-arrow"),
         testimRightArrow = document.getElementById("right-arrow"),
         testimSpeed = 4500,
         currentSlide = 0,
         currentActive = 0,
         testimTimer,
             touchStartPos,
             touchEndPos,
             touchPosDiff,
             ignoreTouch = 30;
     ;
 
     window.onload = function() {
 
         // Testim Script
         function playSlide(slide) {
             for (var k = 0; k < testimDots.length; k++) {
                 testimContent[k].classList.remove("active");
                 testimContent[k].classList.remove("inactive");
                 testimDots[k].classList.remove("active");
             }
 
             if (slide < 0) {
                 slide = currentSlide = testimContent.length-1;
             }
 
             if (slide > testimContent.length - 1) {
                 slide = currentSlide = 0;
             }
 
             if (currentActive != currentSlide) {
                 testimContent[currentActive].classList.add("inactive");            
             }
             testimContent[slide].classList.add("active");
             testimDots[slide].classList.add("active");
 
             currentActive = currentSlide;
         
             clearTimeout(testimTimer);
             testimTimer = setTimeout(function() {
                 playSlide(currentSlide += 1);
             }, testimSpeed)
         }
 
         testimLeftArrow.addEventListener("click", function() {
             playSlide(currentSlide -= 1);
         })
 
         testimRightArrow.addEventListener("click", function() {
             playSlide(currentSlide += 1);
         })    
 
         for (var l = 0; l < testimDots.length; l++) {
             testimDots[l].addEventListener("click", function() {
                 playSlide(currentSlide = testimDots.indexOf(this));
             })
         }
 
         playSlide(currentSlide);
 
         // keyboard shortcuts
         document.addEventListener("keyup", function(e) {
             switch (e.keyCode) {
                 case 37:
                     testimLeftArrow.click();
                     break;
                     
                 case 39:
                     testimRightArrow.click();
                     break;
 
                 case 39:
                     testimRightArrow.click();
                     break;
 
                 default:
                     break;
             }
         })
             
             testim.addEventListener("touchstart", function(e) {
                     touchStartPos = e.changedTouches[0].clientX;
             })
         
             testim.addEventListener("touchend", function(e) {
                     touchEndPos = e.changedTouches[0].clientX;
                 
                     touchPosDiff = touchStartPos - touchEndPos;
                 
                     console.log(touchPosDiff);
                     console.log(touchStartPos);	
                     console.log(touchEndPos);	
 
                 
                     if (touchPosDiff > 0 + ignoreTouch) {
                             testimLeftArrow.click();
                     } else if (touchPosDiff < 0 - ignoreTouch) {
                             testimRightArrow.click();
                     } else {
                         return;
                     }
                 
             })
     }
 </script>