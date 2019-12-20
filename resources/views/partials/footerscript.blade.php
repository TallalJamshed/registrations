<script src="{{asset('js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('js/argon-dashboard.min.js?v=1.1.0')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>

<script>
  $('.dropdown-btn').click(function(){
    $(this).toggleClass("active");
    $('.dropdown-btn').not(this).removeClass("active");
    // var dropdownContent = $(this).siblings();
    // console.log($(this).next().css( "display"));
    // if ($(this).next().css( "display") === "block") {
    //   $(this).next().toggle("slow");
    // } else {
      $(this).next().toggle("slow");
      $('.dropdown-btn').not(this).next().css( "display","none");
    // }

  });
  var dropdown = $('.dropdown-btn');
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    // var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        // dropdown.classList.toggle("active");
      // this.classList.toggle("active");
      // this.classList.toggle("active");
      // dropdown.not(this).classList.toggle("active");
      // not(this).classList.toggle("active");
      // var dropdownContent = this.nextElementSibling;
      // if (dropdownContent.style.display === "block") {
      // dropdownContent.style.display = "none";
      // } else {
      // dropdownContent.style.display = "block";
      // }
      });
    }
    </script>
    