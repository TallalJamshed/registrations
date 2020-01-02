<script src="{{asset('js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('js/argon-dashboard.min.js?v=1.1.0')}}"></script>
  <!-- Google Maps API Js -->
  {{-- <script src="https://maps.google.com/maps/api/js?v=3&sensor=false"></script> --}}
  <script>
    function initMap() {

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {lat: 33.5714482, lng: 73.0284069}
      });

      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      
      $.ajax({
        url:'/getschool',
        type: 'post',
        datatype: 'json',
        data:{_token:'{{csrf_token()}}'},
        header:{
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
          console.log(data);
          data.forEach(element => {
            marker = new google.maps.Marker({
              position: new google.maps.LatLng(element.latitude, element.longitude),
              map: map
            });

            google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
              return function() {
                infowindow.setContent(element.school_name);
                infowindow.open(map, marker);
              }
            })(marker, i));
            // console.log(element.latitude);
          });
        },
      });
      var locations = [
        ['Dar-e-Arqam', 33.5490148, 73.079546, 4],
        ['Allied school', 33.5550148, 73.074546, 5],
        ['F.G.college', 33.5560148, 73.085546, 3],
        ['Sir Syed College', 33.5670148, 73.096546, 2],
        ['Fauji Foundation School', 33.5680148, 73.057546, 1]
      ];

      

      // for (i = 0; i < locations.length; i++) {  
      //     marker = new google.maps.Marker({
      //       position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      //       map: map
      //     });

      //   google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
      //     return function() {
      //       infowindow.setContent(locations[i][0]);
      //       infowindow.open(map, marker);
      //     }
      //   })(marker, i));
    //   }
    }
  </script>
{{-- AIzaSyAGz0uwfCViWX9CfNqFbudJ0Gee5YStCFE --}}
{{-- my    AIzaSyBk0_VOTcgZgNVVcSfX52S8NHpuK4qHniY --}}
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGz0uwfCViWX9CfNqFbudJ0Gee5YStCFE&callback=initMap"
    async defer></script>


  <!-- GMaps PLugin Js -->
  {{-- <script src="{{asset('js/plugins/gmaps/gmaps.js')}}"></script> --}}

  {{-- <script src="{{asset('js/google.js')}}"></script> --}}
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
  {{-- <script src="{{asset('js/jquery.filtertable.js')}}"></script> --}}
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
<script>
  $(document).ready( function () {
    $('#loctable').DataTable({
      // 'display':['stripe','hover'],
    });
  });
</script>
{{-- <script>
  $(document).ready(function(){
    $('table').filterTable(); //if this code appears after your tables; otherwise, include it in your document.ready() code.
  });
</script> --}}

<script>
  $('.dropdown-btn').click(function(){
    $(this).toggleClass("active");
    $('.dropdown-btn').not(this).removeClass("active");
    $(this).next().toggle("slow");
    $('.dropdown-btn').not(this).next().css( "display","none");
    var btn = $this;
  });
  $(document).ready(function(){
      // alert();
    console.log($('a.active').parent());
    if($('a.active').parent('.dropdown-container').length){
      $('a.active').parent().toggle("slow");
    }
  });
</script>

<script>
  $(document).ready(function() {
    $('.povselect').select2();
    $('.pov_for_area').select2();
    $('.cityselect').select2();
    $('.pov_for_subarea').select2();
    $('.city_for_subarea').select2();
    $('.areaselect').select2();
    $('.fk_school_id').select2();
    $('.fk_subarea_id').select2();
  });
</script>

<script>
  setTimeout(function() {
    $('#message').fadeOut('slow');
  }, 3000); 
</script>

<script>
  $('.povselect').change(function(){
    $('#city_name').prop('disabled',false);
  });
  $('.cityselect').change(function(){
    $('#area_name').prop('disabled',false)
  });
  $('.areaselect').change(function(){
    $('#fk_subarea_id').prop('disabled',false)
  });
  $('.fk_school_id').change(function(){
    $('.disable_on_sc_id').prop('disabled',false)
    // $('#sc_br_address').prop('disabled',false)
  });
</script>



<script>
  $('#pov_for_area').change(function(){
    var province = $('#pov_for_area').val();
    $.ajax({
      url:'/cities',
      type: 'post',
      datatype: 'json',
      data:{'fk_province_id': province , _token:'{{csrf_token()}}'},
      header:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        $('.cityselect').prop('disabled',false);
        $('.cityselect').empty();
        $('.cityselect').change();
        $('.cityselect').append(new Option("" , ""));
        data.forEach(element => {
          $('.cityselect').append(new Option(element.city_name , element.city_id));
        });
      },
    })
  });
</script>

<script>
  $('#pov_for_subarea').change(function(){
    var province = $('#pov_for_subarea').val();
    $.ajax({
      url:'/cities',
      type: 'post',
      datatype: 'json',
      data:{'fk_province_id': province , _token:'{{csrf_token()}}'},
      header:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        $('.city_for_subarea').prop('disabled',false);
        $('.city_for_subarea').empty();
        $('.city_for_subarea').change();
        $('.city_for_subarea').append(new Option("" , ""));
        data.forEach(element => {
          $('.city_for_subarea').append(new Option(element.city_name , element.city_id));
        });
      },
    })
  });
</script>

<script>
  $('#city_for_subarea').change(function(){
    var city = $('#city_for_subarea').val();
    $.ajax({
      url:'/areas',
      type: 'post',
      datatype: 'json',
      data:{'fk_city_id': city , _token:'{{csrf_token()}}'},
      header:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        $('.areaselect').prop('disabled',false);
        $('.areaselect').empty();
        $('.areaselect').change();
        $('.areaselect').append(new Option("" , ""));
        data.forEach(element => {
          $('.areaselect').append(new Option(element.area_name , element.area_id));
        });
      },
    })
  });
</script>

<script>
  $('#areaselect').change(function(){
    var area = $('#areaselect').val();
    $.ajax({
      url:'/subareas',
      type: 'post',
      datatype: 'json',
      data:{'fk_area_id': area , _token:'{{csrf_token()}}'},
      header:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        $('.fk_subarea_id').prop('disabled',false);
        $('.fk_subarea_id').empty();
        $('.fk_subarea_id').change();
        $('.fk_subarea_id').append(new Option("NA" , "1"));
        data.forEach(element => {
          $('.fk_subarea_id').append(new Option(element.subarea_name , element.fk_area_id));
        });
      },
    })
  });
</script>
